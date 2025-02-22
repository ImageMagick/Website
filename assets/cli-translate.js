function addCliTranslations() {
  let imagemagick_cli_lists = null;

  function setCliChanged(selectNode) {
    let language = selectNode.value;

    let display_windows = language == "Windows" ? "inherit" : "none";
    let display_linux = language == "Linux" ? "inherit" : "none";
    let display_batch = language == "Batch file" ? "inherit" : "none";

    for (let node of imagemagick_cli_lists["windows"]) {
      node.style.display = display_windows;
    }
    for (let node of imagemagick_cli_lists["linux"]) {
      node.style.display = display_linux;
    }
    for (let node of imagemagick_cli_lists["batch"]) {
      node.style.display = display_batch;
    }
    for (let node of imagemagick_cli_lists["select"]) {
      node.value = language;
    }
  }

  function addSelectOptions(node) {
    let selectCliLanguageNode = document.createElement("select");
    selectCliLanguageNode.className += "btn text-dark bg-light mx-4 cli-select-button";
    selectCliLanguageNode.style.display = "none";
    selectCliLanguageNode.onchange = function(){setCliChanged(this)};
    selectCliLanguageNode.title = "Change operating system syntax";
    let selectCliLanguageOptions = ["Linux","Windows","Batch file"];

    for (let option of selectCliLanguageOptions) {
      let optionNode = document.createElement("option");
      optionNode.text=option;
      selectCliLanguageNode.appendChild(optionNode);
    }

    node.after(selectCliLanguageNode);
    return selectCliLanguageNode;
  }

  function translateLinuxToWindows(node) {
    const imagemagick_linux_to_windows_replacements = new Map([
      [/\\\s*\n/gm, "^\n"], //replace newlines with ^\n
      [/\s?\\(\(|\))\s?/gm, " $1 "], // unescape parens, add space on either side to ensure compatibility "word\)" is valid in linux in windows "word)" is not.
      [/\\!/gm,"!"], // unescape exclamation point.
      [/'/gm, "\""], //single quote to double quote, breaks on nested quotes.
      [/\&|\||\<|\>/gm, "\\$&"], //Escape &,|,<,> - note: appears unused.
    ]);

    imagemagick_linux_to_windows_replacements.forEach(function(value,key) {
      node.innerHTML = node.innerHTML.replaceAll(key,value);
    });
  }

  function translateWindowsToBatch(node) {
    const imagemagick_linux_to_windows_bat_replacements = new Map([
      [/%/gm, "%%"], //Double up % signs. Needed for bat files, but not for CMD.
      [/^\s*#/gm, "::"], //Replace UNIX comment # with two colons. No support for inline comments.
    ])

    imagemagick_linux_to_windows_bat_replacements.forEach(function(value,key) {
      node.innerHTML = node.innerHTML.replaceAll(key,value);
    });
  }

  function addLinuxWindowsCLIToggle(node) {
    let copyNode = node.cloneNode(true);
      copyNode.classList.add("cli-windows");
      copyNode.style.display = "none";
      translateLinuxToWindows(copyNode);

      let batchNode = copyNode.cloneNode(true);
      batchNode.classList.add("cli-batch");
      batchNode.style.display = "none";
      translateWindowsToBatch(batchNode);

      if(batchNode.innerHTML == node.innerHTML) { // No change, ignore.
          copyNode.remove();
          return [];
      }

      node.classList.add("cli-linux");
      node.after(copyNode);
      copyNode.after(batchNode);
      return [copyNode,batchNode];
  }

  function createCliLists() {
    let pres = document.querySelectorAll('pre.cli');
    let cliWindowsList = [];
    let cliBatchList = [];
    let cliLinuxList = [];
    let cliSelectList = [];
    for (let pre of pres) {
      let samp = pre.querySelector("samp");
      if (samp != null) {
        let translated = addLinuxWindowsCLIToggle(samp);
        if(translated.length == 2) {
            cliLinuxList.push(samp);
            cliWindowsList.push(translated[0]);
            cliBatchList.push(translated[1]);
            cliSelectList.push(addSelectOptions(pre))
        }
      }
    }

    return {
      "windows": cliWindowsList,
      "linux": cliLinuxList,
      "batch": cliBatchList,
      "select": cliSelectList
    };
  }

  imagemagick_cli_lists = createCliLists();
  for (let node of imagemagick_cli_lists["select"]) {
    node.style.display = null;
  }
}

setTimeout(addCliTranslations, 0);
