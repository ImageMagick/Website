function addCliTranslations() {
  var imagemagick_cli_lists = null;

  function addSelectOptions(node)
  {
      var selectCliLanguageNode = document.createElement("select");
      selectCliLanguageNode.className += "btn text-dark bg-light mx-4 cli-select-button";
      selectCliLanguageNode.onchange = function(){setCliChanged(this)};
      selectCliLanguageNode.title = "Change Operating System Syntax";
      var selectCliLanguageOptions = ["Linux","Windows","Batch File"];

      for(let option of selectCliLanguageOptions){
          var optionNode = document.createElement("option");
          optionNode.text=option;
          selectCliLanguageNode.appendChild(optionNode);
      }
      node.after(selectCliLanguageNode);
      return selectCliLanguageNode;
  }

  const imagemagick_linux_to_windows_replacements = new Map([
      [/\\\s*\n/gm, "^\n"], //replace newlines with ^\n
      [/\s?\\(\(|\))\s?/gm, " $1 "], // unesecape parens, add space on either side to ensure compatibility "word\)" is valid in linux in windows "word)" is not.
      [/\\!/gm,"!"], // unescape exclamation point.
      [/'/gm, "\""], //single quote to double quote, breaks on nested quotes.
      [/\&|\||\<|\>/gm, "\\$&"], //Escape &,|,<,> - note: appears unused.
  ]);

  const imagemagick_linux_to_windows_bat_replacements = new Map([
      [/%/gm, "%%"], //Double up % signs. Needed for bat files, but not for CMD.
      [/^\s*#/gm, "::"], //Replace UNIX comment # with two colons. No support for inline comments.
  ])

  function translateLinuxToWindows(node) {
      imagemagick_linux_to_windows_replacements.forEach(function(value,key){
          node.innerHTML = node.innerHTML.replaceAll(key,value);
      });
  }

  function translateWindowsToBatch(node) {
      imagemagick_linux_to_windows_bat_replacements.forEach(function(value,key){
          node.innerHTML = node.innerHTML.replaceAll(key,value);
      });
  }

  function addLinuxWindowsCLIToggle(node) {
      var copyNode = node.cloneNode(true);
      copyNode.classList.add("cli-windows");
      copyNode.style.display = "none";
      translateLinuxToWindows(copyNode);
      var batchNode = copyNode.cloneNode(true);
      batchNode.classList.add("cli-batch");
      batchNode.style.display = "none";
      translateWindowsToBatch(batchNode);
      if(batchNode.innerHTML == node.innerHTML) // No change, ignore.
      {
          copyNode.remove();
          return [];
      }

      node.classList.add("cli-linux");
      node.after(copyNode);
      copyNode.after(batchNode);
      return [copyNode,batchNode];
  }

  function createCliLists() {
      var pres = document.querySelectorAll('pre.cli');
      var cliWindowsList = [];
      var cliBatchList = [];
      var cliLinuxList = [];
      var cliSelectList = [];
      for (let pre of pres) {
          var samp = pre.querySelector("samp");
          if(samp != null) {
              var translated = addLinuxWindowsCLIToggle(samp);
              if(translated.length == 2)
              {
                  cliLinuxList.push(samp);
                  cliWindowsList.push(translated[0]);
                  cliBatchList.push(translated[1]);
                  cliSelectList.push(addSelectOptions(pre))
              }
          }
      }

      return {"windows":cliWindowsList, "linux":cliLinuxList, "batch": cliBatchList, "select":cliSelectList};
  }

  function setCliLanguage(language){
      if( imagemagick_cli_lists == null) {
          imagemagick_cli_lists = createCliLists();
      }

      var display_windows = language == "Windows" ? "inherit" : "none";
      var display_linux = language == "Linux" ? "inherit" : "none";
      var display_batch = language == "Batch File" ? "inherit" : "none";
      for( let node of imagemagick_cli_lists["windows"])
      {
          node.style.display = display_windows;
      }
      for( let node of imagemagick_cli_lists["linux"])
      {
          node.style.display = display_linux;
      }
      for( let node of imagemagick_cli_lists["batch"])
      {
          node.style.display = display_batch;
      }
      for( let node of imagemagick_cli_lists["select"] )
      {
          node.value = language;
      }
  }

  function setCliChanged(selectNode){
      setCliLanguage(selectNode.value);
  }

  imagemagick_cli_lists = createCliLists();
}

addCliTranslations();