# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [6.9.13-11](https://github.com/ImageMagick/ImageMagick6/compare/6.9.13-10...6.9.13-11) - 2024-05-25

### Commits

- beta release [`e7e4c01`](https://github.com/ImageMagick/ImageMagick6/commit/e7e4c011e6166113c3af7423c922286fc974261d)
- Set the parameters to NAN inside GetImageChannelMean when GetImageChannelStatistics returns null. [`2605fc7`](https://github.com/ImageMagick/ImageMagick6/commit/2605fc79bbc0759a528e643c70c5a7fa79b978c6)
- avoid text truncation for captions (https://github.com/ImageMagick/ImageMagick/issues/7304) [`78139cf`](https://github.com/ImageMagick/ImageMagick6/commit/78139cfd61e64f8300126c2bedac40e0d396ce04)
- return artifacts, not properties (https://github.com/ImageMagick/ImageMagick/issues/7309) [`e7ead21`](https://github.com/ImageMagick/ImageMagick6/commit/e7ead215434b8b2dbea20592c039ef02cdd176da)
- ensure effect with opacity in draw operator [`7a6485b`](https://github.com/ImageMagick/ImageMagick6/commit/7a6485bd1f65974cb9322ee4aca3fa19dc20130d)
- eliminate compiler error [`d04f037`](https://github.com/ImageMagick/ImageMagick6/commit/d04f037218200c29d468e4bebf9544a3f4027adf)
- eliminate compiler errors [`84fb765`](https://github.com/ImageMagick/ImageMagick6/commit/84fb7652538f10b892eb65c26bac6983ff55578a)
- add utime header [`6816242`](https://github.com/ImageMagick/ImageMagick6/commit/68162429b47c9b217bd64f9250fb38f64b050ede)
- correct spelling (https://github.com/ImageMagick/Website/discussions/100) [`aafb1db`](https://github.com/ImageMagick/ImageMagick6/commit/aafb1db6992f727e64897a77bba604653886002a)
- alpha channel if alpha mask or 32-bit uncompressed [`11587ef`](https://github.com/ImageMagick/ImageMagick6/commit/11587ef70dad6a34a200eccbbda29d39cf30f5df)
- Switch to federated credential with Trusted Signing. [`368f39f`](https://github.com/ImageMagick/ImageMagick6/commit/368f39fb7d1c1aa42c3c35b4645b5ff7b8fbbb09)
- Corrected name of the action. [`2f24a28`](https://github.com/ImageMagick/ImageMagick6/commit/2f24a287c2a67bda6f6a82813e7ed7ba25a639e8)
- Skip Azure CLI login in pull requests. [`6ca317c`](https://github.com/ImageMagick/ImageMagick6/commit/6ca317c24dd752240c9f14953744ded9420f67d4)
- Removed bits_per_pixel from IconInfo. [`0020409`](https://github.com/ImageMagick/ImageMagick6/commit/002040905a3a12c2ab91e93c9579ba9961cbe4e8)
- Removed planes from IconInfo. [`5e53f0f`](https://github.com/ImageMagick/ImageMagick6/commit/5e53f0fc6db36a90f68c2de08ca55076ceae20d3)
- Removed size from IconInfo. [`1a94c97`](https://github.com/ImageMagick/ImageMagick6/commit/1a94c97efbbcd7ef37f0ae2c8c4a7d9b112ecc3f)
- Removed number_colors from IconInfo. [`2f8110c`](https://github.com/ImageMagick/ImageMagick6/commit/2f8110c3b4ba83ec0b297432907b7016b13150bc)
- Removed colors_important from IconInfo. [`e8a6d3f`](https://github.com/ImageMagick/ImageMagick6/commit/e8a6d3f93bb66fd6d0441cf6af7fc30f70daa823)
- Removed width and height from IconInfo. [`b7cf7d0`](https://github.com/ImageMagick/ImageMagick6/commit/b7cf7d0474fa96a432600912bf9cf504d9094d30)
- Removed x_pixels and y_pixels from IconInfo. [`ed843f9`](https://github.com/ImageMagick/ImageMagick6/commit/ed843f98fa057bc937540d1e64cc06de1eb90084)
- Removed image_size from IconInfo. [`7df3950`](https://github.com/ImageMagick/ImageMagick6/commit/7df3950c03e269ffb1df990bb0e6db4031efecda)
- Removed compression from IconInfo. [`1947b4e`](https://github.com/ImageMagick/ImageMagick6/commit/1947b4efa5f4cf5539bf8e082d9061b03cdeb2de)
- Removed IconInfo struct [`0945402`](https://github.com/ImageMagick/ImageMagick6/commit/0945402304e0ac27398fa493f1438f65211f14b8)
- Removed reserved and resource_type from IconFile. [`ed30832`](https://github.com/ImageMagick/ImageMagick6/commit/ed30832a945201ad38bc24ba3dac259fe8fe6c04)
- No longer allocate 1024 icon entries for all images. [`2439753`](https://github.com/ImageMagick/ImageMagick6/commit/24397534f7c5694840bd6b70bf2d16efe7382b5c)
- Moved AutoResizeImage method closer to the write method. [`57eae13`](https://github.com/ImageMagick/ImageMagick6/commit/57eae13b4e473bab9c1cdb8a1a0ee9fb4eccf20c)
- Moved determining the width and height of an icon to a separate method. [`3e19ea7`](https://github.com/ImageMagick/ImageMagick6/commit/3e19ea70e8b6108c8937f2ad6355dc9a99b91103)
- Fixed method that determines the width and height of an icon (https://github.com/ImageMagick/ImageMagick/issues/7341) [`a0fa6b3`](https://github.com/ImageMagick/ImageMagick6/commit/a0fa6b38bf8893637341d0b0e9bb20fe3219683e)
- Added missing typecast. [`f4415f8`](https://github.com/ImageMagick/ImageMagick6/commit/f4415f8672dacdb543172043e4055e0ba5a5a5ea)
- Removed unused variables. [`f8b0247`](https://github.com/ImageMagick/ImageMagick6/commit/f8b02477f97323927e1a0e19003540c0f44a804c)
- release [`b9bdd02`](https://github.com/ImageMagick/ImageMagick6/commit/b9bdd0299b76b7e74577b875db3d006fdd68d2d4)

## [6.9.13-10](https://github.com/ImageMagick/ImageMagick6/compare/6.9.13-9...6.9.13-10) - 2024-05-05

### Commits

- beta release [`8f6186e`](https://github.com/ImageMagick/ImageMagick6/commit/8f6186e4e4df5a0c18b2f64ade6cdd4f44113300)
- use &gt;= instead to work around precision limitations of a double. [`3252d47`](https://github.com/ImageMagick/ImageMagick6/commit/3252d4771ff1142888ba83c439588969fcea98e4)
- forgot to cast double to unsigned int [`be15ac9`](https://github.com/ImageMagick/ImageMagick6/commit/be15ac962dea19536be1009d157639030fc42be9)
- protect backslash write writing properties to MIFF (https://github.com/ImageMagick/ImageMagick/issues/7270) [`7a77955`](https://github.com/ImageMagick/ImageMagick6/commit/7a779557f28497c9e53322674ca5bdf85681bc8e)
- Added version checks for itxt_length in the png coder. [`4d6b920`](https://github.com/ImageMagick/ImageMagick6/commit/4d6b920cfea41467a1179e8a53a66b3d6f8438dc)
- Switch to macos-13. [`4c8223d`](https://github.com/ImageMagick/ImageMagick6/commit/4c8223d62f3d8908dadfab606540cc260f17cdd9)
- Also check the limits for the width and height of the reference grid. [`ea5f7d1`](https://github.com/ImageMagick/ImageMagick6/commit/ea5f7d139143da5fd09a057890493d90cce2dee6)
- respect gradient bounding box [`4ebd314`](https://github.com/ImageMagick/ImageMagick6/commit/4ebd3147dac35df834557ab49c621b6d18492812)
- eliminate compiler warnings [`4b09bdd`](https://github.com/ImageMagick/ImageMagick6/commit/4b09bddeabb0f762506ff9ee7e30b8bb1b58d1fe)
- restore ImageMagick RPM build [`e24db93`](https://github.com/ImageMagick/ImageMagick6/commit/e24db9329203eafea54c872188909a4a37d60dca)
- revert [`147fbb4`](https://github.com/ImageMagick/ImageMagick6/commit/147fbb4962a1f6ae5a8736e4db8b5a1c42b56b54)
- restore PerlMagick build [`599df37`](https://github.com/ImageMagick/ImageMagick6/commit/599df37ba89ba6393b9e5b5cf6de919a1b61bd0e)
- release [`fecc7d0`](https://github.com/ImageMagick/ImageMagick6/commit/fecc7d0f0c2b13878173a9cb31a6677133b4742c)

## [6.9.13-9](https://github.com/ImageMagick/ImageMagick6/compare/6.9.13-8...6.9.13-9) - 2024-04-21

### Commits

- beta release [`f27bd22`](https://github.com/ImageMagick/ImageMagick6/commit/f27bd22abe14a6782def42f6521aa7cd96cfcd89)
- set perl install base to that of ImageMagick's [`ae55feb`](https://github.com/ImageMagick/ImageMagick6/commit/ae55feba3f47534a999fdc0c37e0ec0fb34231f1)
- Corrected check for warning when png:compression-filter is invalid. [`b186009`](https://github.com/ImageMagick/ImageMagick6/commit/b186009c750a64541bf0d37d36c229a236f72e0a)
- Code cleanup. [`5603953`](https://github.com/ImageMagick/ImageMagick6/commit/5603953779730ba283e6a9b50adfe65d7ec65817)
- Call heif_context_set_maximum_image_size_limit to limit high dimensions earlier. [`c6824aa`](https://github.com/ImageMagick/ImageMagick6/commit/c6824aa8ddba9c89d393ddc159d93209e6c96e7e)
- improved range checking (https://github.com/ImageMagick/ImageMagick/issues/6341) [`75ebd99`](https://github.com/ImageMagick/ImageMagick6/commit/75ebd9975f6ba8106ec15a6b3e6ba95f4c14e117)
- check for value &lt; 0, ceil() not required (https://github.com/ImageMagick/ImageMagick/issues/6341) [`b72508c`](https://github.com/ImageMagick/ImageMagick6/commit/b72508c8fce196cd031856574c202490be830649)
- fix undefined behaviors when casting double to size_t (https://github.com/ImageMagick/ImageMagick/issues/6341) [`8878996`](https://github.com/ImageMagick/ImageMagick6/commit/88789966667b748f14a904f8c9122274810e8a3e)
- use a different path for positive and negative values [`bc5ac19`](https://github.com/ImageMagick/ImageMagick6/commit/bc5ac19bd93895e5c6158aad0d8e49a0c50b0ebb)
- release [`e637df3`](https://github.com/ImageMagick/ImageMagick6/commit/e637df3251e117bff4aa6044301f725ab2fd5625)

## [6.9.13-8](https://github.com/ImageMagick/ImageMagick6/compare/6.9.13-7...6.9.13-8) - 2024-04-07

### Merged

- Bump azure/azure-code-signing-action from 0.3.0 to 0.3.1 [`#318`](https://github.com/ImageMagick/ImageMagick6/pull/318)
- Bump actions/checkout from 3 to 4 [`#268`](https://github.com/ImageMagick/ImageMagick6/pull/268)
- delete stray incorrect Unicode characters [`#312`](https://github.com/ImageMagick/ImageMagick6/pull/312)

### Fixed

- Use (PixelPacket *)NULL instead to resolve #319. [`#319`](https://github.com/ImageMagick/ImageMagick6/issues/319)

### Commits

- beta release [`6a29d86`](https://github.com/ImageMagick/ImageMagick6/commit/6a29d86ed26161ce4c9c6b97d94c48778b02fcf0)
- just a template for now [`f89b135`](https://github.com/ImageMagick/ImageMagick6/commit/f89b13550d92571e15171ff78dbdbfc0fd391ec0)
- documentation update [`fd1fb5c`](https://github.com/ImageMagick/ImageMagick6/commit/fd1fb5c13accbb48f9994a398079c0ee40904a71)
- ... [`14e4ec3`](https://github.com/ImageMagick/ImageMagick6/commit/14e4ec31cb149ce290f494495656beb2f2b4c8b9)
- latest documentation [`4eb3fc8`](https://github.com/ImageMagick/ImageMagick6/commit/4eb3fc864527b36ebbaa3c2e6dc65f8c21852a79)
- eliminate rare memory leak [`3fb6732`](https://github.com/ImageMagick/ImageMagick6/commit/3fb6732268ba0ef6a067ed1613d807f08784dec6)
- correct null reference [`cd6e105`](https://github.com/ImageMagick/ImageMagick6/commit/cd6e105068abbc5fa2dfd7d8d6284a8212385d35)
- Removed unicode characters that were added by accident. [`3055105`](https://github.com/ImageMagick/ImageMagick6/commit/3055105cd4605a15104c0935d9b04760281e3ac9)
- latest autoconf update [`c59d29a`](https://github.com/ImageMagick/ImageMagick6/commit/c59d29a5a6cab8940f7ac07268ec3987a7e70f71)
- respect gradient:bounding-box define (https://github.com/ImageMagick/ImageMagick/issues/7143) [`3328513`](https://github.com/ImageMagick/ImageMagick6/commit/3328513da698edaf93cbcd7e3b2c020d2441fa2a)
- threading issue with identifying grayscale (https://github.com/ImageMagick/ImageMagick/issues/7152) [`e4537ca`](https://github.com/ImageMagick/ImageMagick6/commit/e4537ca8c54df9a5d4a33feba5a071855ac767b6)
- transient off-by-one [`907641b`](https://github.com/ImageMagick/ImageMagick6/commit/907641b7ba0b15d91fe0693548d3ada57c9388be)
- update [`61878c7`](https://github.com/ImageMagick/ImageMagick6/commit/61878c771a40c1d7311d2048d8728a6b7f526447)
- update [`e454822`](https://github.com/ImageMagick/ImageMagick6/commit/e4548225d384228dc5306ea6975105c49250e57f)
- respect TIFF orientation tag (https://github.com/ImageMagick/ImageMagick/issues/7147) [`e4c6ce0`](https://github.com/ImageMagick/ImageMagick6/commit/e4c6ce012f564c2c98bfc05edcaf7d384156df4a)
- revert [`a1de90f`](https://github.com/ImageMagick/ImageMagick6/commit/a1de90f73136b01a74fe6b888872200485de2ef6)
- possible temporary pixel cache leak if resources exhausted (https://github.com/ImageMagick/ImageMagick/discussions/7167) [`8898a2b`](https://github.com/ImageMagick/ImageMagick6/commit/8898a2bb8ea452f6e8f245b4e95073ee24f3d7c9)
- install perl module into user-specified prefix [`f665638`](https://github.com/ImageMagick/ImageMagick6/commit/f665638007d1f8627677a2c60ceda971c1d6cbb4)
- do not round off density (https://github.com/ImageMagick/ImageMagick/issues/7203) [`235d2a0`](https://github.com/ImageMagick/ImageMagick6/commit/235d2a047201a75b670f0f6c1d53632a5ea491e6)
- Moved include of OpenCL header files to opencl-private.h [`a966f95`](https://github.com/ImageMagick/ImageMagick6/commit/a966f95f57a95b40e37fed58b669b39ccc6cebd0)
- Removed OpenCL includes. [`78ea689`](https://github.com/ImageMagick/ImageMagick6/commit/78ea6895b38f001f105ac166229aaf7f9a324e77)
- Silence warnings that are raised when using a C++ compiler. [`fd0d176`](https://github.com/ImageMagick/ImageMagick6/commit/fd0d176c6d7186da79291782e8f1e859dddb7496)
- Moved include to the correct file. [`5c71067`](https://github.com/ImageMagick/ImageMagick6/commit/5c7106702358da3aaa70ac843a95e3d37efc2467)
- Switch from the ImageMagick-Windows6 repository to ImageMagick-Windows repository in the main build. [`f32a2c2`](https://github.com/ImageMagick/ImageMagick6/commit/f32a2c2e059aada8fe6aa19ca36731c324a31f0b)
- Switch from the ImageMagick-Windows6 repository to ImageMagick-Windows repository in the daily build. [`bd6974f`](https://github.com/ImageMagick/ImageMagick6/commit/bd6974f790add0d7bbfa01164f5f65942d700035)
- Also run daily build when the file is changed. [`decf5d1`](https://github.com/ImageMagick/ImageMagick6/commit/decf5d112fa6ee40a195d3f1b9bb86c733e22103)
- Corrected path. [`fc6635c`](https://github.com/ImageMagick/ImageMagick6/commit/fc6635ce50282f37c5a2caf9557c2b3139b62b9b)
- Switch from the ImageMagick-Windows6 repository to ImageMagick-Windows repository in the release build. [`9b181d1`](https://github.com/ImageMagick/ImageMagick6/commit/9b181d173bce19b2ce694d2301facbf2b3500847)
- No longer redirect the output with inkscape because this causes issues on Windows. [`08178d7`](https://github.com/ImageMagick/ImageMagick6/commit/08178d7e2dbdd4069b1b261c454afd09e37cdd4b)
- cosmetic [`03219a9`](https://github.com/ImageMagick/ImageMagick6/commit/03219a97d0046856816610e5b6de9f35a0486d8c)
- release [`7013613`](https://github.com/ImageMagick/ImageMagick6/commit/70136130e2dbe02440a0570fb6ce8115af94f6cc)
- release [`c4c16c1`](https://github.com/ImageMagick/ImageMagick6/commit/c4c16c186964f9ff1bd701cb447f4475b6d6f555)
- Renamed workflow. [`0cad051`](https://github.com/ImageMagick/ImageMagick6/commit/0cad051c524783ff984a4d5fcc9b1990ae529eaa)
- Corrected paths. [`72a0952`](https://github.com/ImageMagick/ImageMagick6/commit/72a0952a48b0d4dec569b11033957ed55fff6ec3)
- Corrected clone of the repositories. [`e8b4e09`](https://github.com/ImageMagick/ImageMagick6/commit/e8b4e096ab31dc9123b7c25494682471608a480b)
- Updated path. [`48bb363`](https://github.com/ImageMagick/ImageMagick6/commit/48bb363219f4af53371b917d992053b362d2d42b)
- Renamed artifact. [`8c5f6a7`](https://github.com/ImageMagick/ImageMagick6/commit/8c5f6a7c5c8efd392390d54ea0c46c3501ee2847)
- release (updated) [`5eb340a`](https://github.com/ImageMagick/ImageMagick6/commit/5eb340a1d14477429b756d039147d8a19ebe6d6b)
- release (updated) [`99df1df`](https://github.com/ImageMagick/ImageMagick6/commit/99df1df3bc25843169032f672b737ad56b209715)

## [6.9.13-7](https://github.com/ImageMagick/ImageMagick6/compare/6.9.13-6...6.9.13-7) - 2024-02-25

### Commits

- beta release [`f72e54c`](https://github.com/ImageMagick/ImageMagick6/commit/f72e54c3e9793c03d774cfdb8258913c7f18594f)
- Minor code cleanup. [`dd26309`](https://github.com/ImageMagick/ImageMagick6/commit/dd2630941258557ec3c151345b01a9fc1939f0a3)
- incorrect YCbCr detection [`be65f47`](https://github.com/ImageMagick/ImageMagick6/commit/be65f4717064df6426a51088e2c11ee9677d1c8a)
- Append signature when possible. [`2606a5a`](https://github.com/ImageMagick/ImageMagick6/commit/2606a5a117647f58d5cbfe2270d7dd8b0a6ceaf4)
- leverage darktable delegate if libraw is not available [`08e213c`](https://github.com/ImageMagick/ImageMagick6/commit/08e213c65922ea07f00de1ad912b3aae073026be)
- locate darktable [`90e3324`](https://github.com/ImageMagick/ImageMagick6/commit/90e332456eab526de7f0cbd4e1fb47d8f080dbdb)
- capture stdout [`31bc888`](https://github.com/ImageMagick/ImageMagick6/commit/31bc888d7fef1167e8175e9fbe9a03092d84b26a)
- free image info struct [`fd4d262`](https://github.com/ImageMagick/ImageMagick6/commit/fd4d26294b38884e8cf43d733bc54aad8125d132)
- coalesce images on webp write [`f35cd13`](https://github.com/ImageMagick/ImageMagick6/commit/f35cd139008cab363f4367ddb48c5973d7e45905)
- adjust browser spacing between buttons [`3da057d`](https://github.com/ImageMagick/ImageMagick6/commit/3da057d31756970cb50b1567922e9caf94d36d84)
- Only write density values higher than zero in a jpeg file. [`89728c0`](https://github.com/ImageMagick/ImageMagick6/commit/89728c0e0c9b79fea9a3f4d81ec7f18b28b0850b)
- use radians macro [`daf23ec`](https://github.com/ImageMagick/ImageMagick6/commit/daf23ecd904d42b0f9f2daefb9c92aa07db2a966)
- more work on LCH colorspace [`9ea3631`](https://github.com/ImageMagick/ImageMagick6/commit/9ea363169c61a28468e033a07e78ffa904d8d0c7)
- eliminate compiler exception [`39a86bc`](https://github.com/ImageMagick/ImageMagick6/commit/39a86bcd019abc56b0a7bbe63346187a77abd4b4)
- final corrections to LCH colorspace formula [`0566cb2`](https://github.com/ImageMagick/ImageMagick6/commit/0566cb2388a0455b576bba6312b28b195c019573)
- Removed NTGetLastError from the private header file because it is not exported. [`cb44173`](https://github.com/ImageMagick/ImageMagick6/commit/cb44173dd8cf6eac0f5eb2bbe96daae7a9bde096)
- Return a different error code when the file could not be found on Windows to have the same behavior as on other platforms. [`94123d7`](https://github.com/ImageMagick/ImageMagick6/commit/94123d7c032ebae0708a51d9dd01f6ed7b1b8b38)
- silence warnings [`4af89ea`](https://github.com/ImageMagick/ImageMagick6/commit/4af89eaf9f3e35d7ff9269297d48e876a36510c6)
- release [`f310f94`](https://github.com/ImageMagick/ImageMagick6/commit/f310f943512078ea4f44604a079a95552662d61e)
- release [`eae41b3`](https://github.com/ImageMagick/ImageMagick6/commit/eae41b3fec10c343253be5e9d8d8692529e43911)
- release [`92d144e`](https://github.com/ImageMagick/ImageMagick6/commit/92d144e5641f2eeebd32cf13d318bff657e2aebb)

## [6.9.13-6](https://github.com/ImageMagick/ImageMagick6/compare/6.9.13-5...6.9.13-6) - 2024-02-11

### Merged

- Bump azure/azure-code-signing-action from 0.2.26 to 0.3.0 [`#307`](https://github.com/ImageMagick/ImageMagick6/pull/307)
- Bump azure/azure-code-signing-action from 0.2.22 to 0.2.26 [`#306`](https://github.com/ImageMagick/ImageMagick6/pull/306)

### Commits

- beta releas e [`86e1e68`](https://github.com/ImageMagick/ImageMagick6/commit/86e1e68c215caa39dfceb51a6886ce0ea40c94ef)
- updated link [`2ba6386`](https://github.com/ImageMagick/ImageMagick6/commit/2ba6386b5d0f7869cdfc3fa56a0130a25ede186f)
- eliminate extraneous EXIF comma [`d6cd1d1`](https://github.com/ImageMagick/ImageMagick6/commit/d6cd1d1812e0e848e5bc83e9b4084a1bb7c7ef60)
- https://github.com/ImageMagick/ImageMagick/pull/7068 [`037165b`](https://github.com/ImageMagick/ImageMagick6/commit/037165b0f2965da2e7da240c031d13b0041dfed5)
- escape { when writing MIFF images (https://github.com/ImageMagick/ImageMagick/issues/7071) [`67188d9`](https://github.com/ImageMagick/ImageMagick6/commit/67188d9545977dad61dd460b9b89c7987473740e)
- protect '{' in MIFF key/value pairs [`05f122a`](https://github.com/ImageMagick/ImageMagick6/commit/05f122a5c6008a3ecdd05f459118fea10f4fa3c7)
- ... [`11be624`](https://github.com/ImageMagick/ImageMagick6/commit/11be624adabb2bd65b8d30c0f36386a2ebfae6a4)
- set visible image artifact [`b7018d8`](https://github.com/ImageMagick/ImageMagick6/commit/b7018d84299f9fc8b94f3f5466d2c1681a53ff40)
- extend buffer to maximum field size [`f4373e6`](https://github.com/ImageMagick/ImageMagick6/commit/f4373e6e23ff784c141fe3da1d32345cdf04bba5)
- enable error diffusion for -posterize (https://github.com/ImageMagick/ImageMagick/issues/7079) [`fe69d65`](https://github.com/ImageMagick/ImageMagick6/commit/fe69d6530188814f29a12a8fc4ee391863bdbd2e)
- refactor posterize macro [`88f8ae2`](https://github.com/ImageMagick/ImageMagick6/commit/88f8ae252ab8b82246a2587435d704ecdc55e281)
- improve posterize algorithm [`ba7afaf`](https://github.com/ImageMagick/ImageMagick6/commit/ba7afaf437456638d072dfd95393e9b1ca75c5a1)
- refactor posterize pixel macro [`018ea17`](https://github.com/ImageMagick/ImageMagick6/commit/018ea17bcb1edc4383141072756fb2f0d9e376dd)
- support setting image registry [`95700b0`](https://github.com/ImageMagick/ImageMagick6/commit/95700b0961efeee0022e607524031e24209ed035)
- check for class recursion [`bc12b9a`](https://github.com/ImageMagick/ImageMagick6/commit/bc12b9ab95c774a4bca15b2c4e20663040d46897)
- Fixed running identify on dds files with a cubemap. [`a0ee79b`](https://github.com/ImageMagick/ImageMagick6/commit/a0ee79b5ae4481d4cd24a329e4d2bae5324168cc)
- Set ttl to time when the image will expire instead of the duration that the image can be used. [`7aceff0`](https://github.com/ImageMagick/ImageMagick6/commit/7aceff025c6dafd97be6e1dba7fd5c361e3278d8)
- improve time-to-live formatting [`92e2747`](https://github.com/ImageMagick/ImageMagick6/commit/92e27473a5fd04b32b6905c23526214cf33cf3a3)
- make version checks human readable [`6348364`](https://github.com/ImageMagick/ImageMagick6/commit/6348364b1cf8255563d14bed2147d8a2078c65e3)
- fix incorrect stroke opacity (https://github.com/ImageMagick/ImageMagick/issues/7097) [`b07d649`](https://github.com/ImageMagick/ImageMagick6/commit/b07d6495436b6f0a02e060f7ac7626ecae216f8c)
- Disable debug block. [`54ac1fb`](https://github.com/ImageMagick/ImageMagick6/commit/54ac1fb1d3ec8cb5f1eeddb959971880c771829b)
- correct pixel offset validation method [`69a02ab`](https://github.com/ImageMagick/ImageMagick6/commit/69a02abbd3e2f9f62aca61ee58c43df3bc752eb2)
- if resampling fails, replace with invalid pixel [`6746dff`](https://github.com/ImageMagick/ImageMagick6/commit/6746dfffed7821c56ac4e0d3e1cfd265f71a58da)
- also allow invalid length where 8 was added to the header size. [`8a4dd76`](https://github.com/ImageMagick/ImageMagick6/commit/8a4dd76890b55bc821fe0a167e89d405fac1d1bd)
- release [`7df93f0`](https://github.com/ImageMagick/ImageMagick6/commit/7df93f051bb9188f4ba00c66bd51ee20ee811abd)
- release [`476beb5`](https://github.com/ImageMagick/ImageMagick6/commit/476beb52a43403737ccf9b92c64d685535f4f106)

## [6.9.13-5](https://github.com/ImageMagick/ImageMagick6/compare/6.9.13-4...6.9.13-5) - 2024-01-21

### Merged

- fix PKG_CONFIG_LIBDIR [`#303`](https://github.com/ImageMagick/ImageMagick6/pull/303)

### Commits

- beta release [`bc79cf0`](https://github.com/ImageMagick/ImageMagick6/commit/bc79cf09b1512dcc96d1f8d5a2603ac1c733aff1)
- release [`5ced10c`](https://github.com/ImageMagick/ImageMagick6/commit/5ced10cedee8750c9ecab1ae3d7e3f9c0d020139)

## [6.9.13-4](https://github.com/ImageMagick/ImageMagick6/compare/6.9.13-3...6.9.13-4) - 2024-01-07

### Commits

- beta release [`6d2a3fc`](https://github.com/ImageMagick/ImageMagick6/commit/6d2a3fc72829d366155b0ab2684689f74c63390a)
- Improved name of installer artifacts [`212577d`](https://github.com/ImageMagick/ImageMagick6/commit/212577df21dc6dad827a7d1302ae5383a0dd10d3)
- support -alpha remove-opaque option [`4461433`](https://github.com/ImageMagick/ImageMagick6/commit/446143364b539c060d51f7a5ca2562b0616aa552)
- Corrected path to file that contains the version. [`0c26720`](https://github.com/ImageMagick/ImageMagick6/commit/0c2672004c2ad19d686d19aeaafc2130c31e65b0)
- reduce # threads for -alpha option [`e22d816`](https://github.com/ImageMagick/ImageMagick6/commit/e22d816a204c344303b4af8a2f903378272ef838)
- -alpha deactivate-if-opaque disables the alpha channel if and only if its entirely opaque [`1a1b0f9`](https://github.com/ImageMagick/ImageMagick6/commit/1a1b0f9edfecfdf768bcd05f7b1f06061f0db29c)
- -alpha off-if-opaque turns off the alpha channel if its entirely opaque [`83002fb`](https://github.com/ImageMagick/ImageMagick6/commit/83002fbe2b7d8cdde829491ae2ba991e350b1ddc)
- slight optimization [`5db8a00`](https://github.com/ImageMagick/ImageMagick6/commit/5db8a00276c5923f16c578351df12474ffaf0b56)
- fix error: 'libraw_data_t' has no member named 'rawparams' [`55f662f`](https://github.com/ImageMagick/ImageMagick6/commit/55f662f1484e2655e6efecaf04eb2ae70c349207)
- thread tuning [`959549a`](https://github.com/ImageMagick/ImageMagick6/commit/959549ac878299820c3ae808bc32baf3a94b062d)
- thread tuning [`fb0af62`](https://github.com/ImageMagick/ImageMagick6/commit/fb0af62d0f6e211bdb979f2084d589dc2391bc2b)
- optimize HDRI detection [`2babf45`](https://github.com/ImageMagick/ImageMagick6/commit/2babf459209be29f62688165604c3dabf7c23013)
- factor is a const argument [`4929a49`](https://github.com/ImageMagick/ImageMagick6/commit/4929a49bd3d7ab4839a2d0442ebac696126e1c55)
- cast to int [`75aa4f2`](https://github.com/ImageMagick/ImageMagick6/commit/75aa4f272af1350197e7dc99f3489abf81a64065)
- https://github.com/ImageMagick/ImageMagick/issues/7006 [`2410dc3`](https://github.com/ImageMagick/ImageMagick6/commit/2410dc36ee792d01a04f2b3d28ed4944da32b59c)
- improve RSVG exception checking (https://github.com/ImageMagick/ImageMagick/issues/7005) [`e8d247d`](https://github.com/ImageMagick/ImageMagick6/commit/e8d247d26dcca88a684522bf6169932359b6fa2b)
- fix off-by-one issue (https://github.com/ImageMagick/ImageMagick/issues/7004) [`ae10447`](https://github.com/ImageMagick/ImageMagick6/commit/ae104474ca10218b55340056b7bad95f90cc889d)
- fix caption sizing issue (https://github.com/ImageMagick/ImageMagick/issues/7004) [`73c06ad`](https://github.com/ImageMagick/ImageMagick6/commit/73c06ad4b0bc5c305a857d1d1a56c4d09ffbb34e)
- correct off-by one issue [`3f9f55d`](https://github.com/ImageMagick/ImageMagick6/commit/3f9f55d42e0d20be7b333dd77b2bd15d7f85021d)
- https://github.com/ImageMagick/ImageMagick/pull/7008/ [`f6f99ac`](https://github.com/ImageMagick/ImageMagick6/commit/f6f99ac056c5694607074ded30332273489c7bb3)
- correct usage [`5bcb76d`](https://github.com/ImageMagick/ImageMagick6/commit/5bcb76d684e6c5e90c2ce1044333d031fd181a00)
- off-by-one error [`861e5e2`](https://github.com/ImageMagick/ImageMagick6/commit/861e5e21a06c0c54c6b82df458388f4e7c525a13)
- release [`0dc4853`](https://github.com/ImageMagick/ImageMagick6/commit/0dc4853d6a7535b76aeff948a0d006bfbeea4b3b)

## [6.9.13-3](https://github.com/ImageMagick/ImageMagick6/compare/6.9.13-2...6.9.13-3) - 2023-12-30

### Merged

- configure.ac: fixup LFS check for autoconf-2.72 [`#300`](https://github.com/ImageMagick/ImageMagick6/pull/300)

### Commits

- beta release [`844f1d7`](https://github.com/ImageMagick/ImageMagick6/commit/844f1d7d7e681fd3830dc4d3c9461b4b00d477b2)
- beta release [`d31d317`](https://github.com/ImageMagick/ImageMagick6/commit/d31d317dc532b42751679811e5ed0f5c2ef37cdb)
- check for version 0.20 instead [`1ad0102`](https://github.com/ImageMagick/ImageMagick6/commit/1ad010298166955db0b583586c5e66ef79af6fce)
- display hidden image [`07d2bf2`](https://github.com/ImageMagick/ImageMagick6/commit/07d2bf2a60e3c71dfeeaaf4bf103128621f8b7d8)
- latest autoconf/automake update [`9169a2f`](https://github.com/ImageMagick/ImageMagick6/commit/9169a2f6736edac3d238d9ed4e0b1114dbad513b)
- identify image time-to-live [`377329e`](https://github.com/ImageMagick/ImageMagick6/commit/377329ea885388e42f0f4e8e6a12106a757fdcf6)
- set errno if time-to-live exceeded [`287ba31`](https://github.com/ImageMagick/ImageMagick6/commit/287ba31f03a98764a3161a599a2169bb53133fec)
- eliminate compiler exception [`9b9eb2c`](https://github.com/ImageMagick/ImageMagick6/commit/9b9eb2c2ff88ede99cfd502b7bed7ac8e24bfe99)
- conditionally set errno to ESTALE [`fc58710`](https://github.com/ImageMagick/ImageMagick6/commit/fc587101b188e7b30df1a11872b17eabf378edba)
- cosmetic [`2dd01aa`](https://github.com/ImageMagick/ImageMagick6/commit/2dd01aa1b913498f12bb974b949c3a66431c2498)
- ignore SyncBlob() status in CloseBlob() (https://github.com/ImageMagick/ImageMagick/issues/6984) [`a1e5ff8`](https://github.com/ImageMagick/ImageMagick6/commit/a1e5ff811aeb935f7adfa4740026c59dac2bb01f)
- repo change [`0d9ba58`](https://github.com/ImageMagick/ImageMagick6/commit/0d9ba588c98552cba9022716c1a72b411683eddb)
- update manifest [`b9f5797`](https://github.com/ImageMagick/ImageMagick6/commit/b9f579720f1493881fcaeec335706ff788bc09eb)
- release [`76d7eb8`](https://github.com/ImageMagick/ImageMagick6/commit/76d7eb8d15654b14ef06e59ee013cc211a3d372b)
- release [`ec69f01`](https://github.com/ImageMagick/ImageMagick6/commit/ec69f01767a2ba9753c6361eb7d1238ba31f4152)

## [6.9.13-2](https://github.com/ImageMagick/ImageMagick6/compare/6.9.13-1...6.9.13-2) - 2023-12-25

### Merged

- configure: drop backported ac_func_fseeko.m4 for autoconf-2.72 compat… [`#297`](https://github.com/ImageMagick/ImageMagick6/pull/297)

### Commits

- beta release [`52f9b02`](https://github.com/ImageMagick/ImageMagick6/commit/52f9b0211d539d12ecd360719f1a1a3552d63591)
- beta release [`8dca933`](https://github.com/ImageMagick/ImageMagick6/commit/8dca93333a7db0ceb63b650bf53d2a44ff81c69a)
- cosmetic [`e45e308`](https://github.com/ImageMagick/ImageMagick6/commit/e45e3082f741cf1d479f71865f37257688686bdb)
- cosmetic [`92efee0`](https://github.com/ImageMagick/ImageMagick6/commit/92efee0258779dd82ef7c5b0e8f0c640e1e5b9ca)
- Corrected order to fix invalid matches. [`48c25cd`](https://github.com/ImageMagick/ImageMagick6/commit/48c25cdf3052e2626c2e1a4036cb259a690095fa)
- b10 should also be moved. [`4686d91`](https://github.com/ImageMagick/ImageMagick6/commit/4686d91b6e6c083a2ca162a0487c0fab4f967382)
- support dng:max-raw-memory define (https://github.com/ImageMagick/ImageMagick/discussions/6922) [`1993c41`](https://github.com/ImageMagick/ImageMagick6/commit/1993c413161849e5fad62a802d63d4007d0e996c)
- properly export YUV JP2 images (https://github.com/ImageMagick/ImageMagick/issues/6943) [`44a5beb`](https://github.com/ImageMagick/ImageMagick6/commit/44a5beb5f0e00e028dcf0ad49ad2dd05a74654fa)
- use ':' specifier [`d438d68`](https://github.com/ImageMagick/ImageMagick6/commit/d438d6830b96edb4c5de030c94e615c579b237f0)
- check for corrupt DJVU images (https://github.com/ImageMagick/ImageMagick/security/advisories/GHSA-wv9p-78jx-g7fv) [`e76a9d6`](https://github.com/ImageMagick/ImageMagick6/commit/e76a9d69693ed5c5f655b63c0bce0639eb47bf67)
- support UTF-8 comments (https://github.com/ImageMagick/ImageMagick/issues/6949) [`c62fc01`](https://github.com/ImageMagick/ImageMagick6/commit/c62fc01834517e865ee4a392cfc1e8e21eda06a9)
- do not prefix iTxt key with 'png:' [`cae7fe1`](https://github.com/ImageMagick/ImageMagick6/commit/cae7fe16637efeb989bd8c143e9bf56480870a1c)
- latest autoconf update [`5e1ec87`](https://github.com/ImageMagick/ImageMagick6/commit/5e1ec877ff70a6e911564906b961254313035589)
- enhance sampling factor parser (https://github.com/ImageMagick/ImageMagick/issues/6943) [`3b3d02e`](https://github.com/ImageMagick/ImageMagick6/commit/3b3d02ea482cbb4ba5d64bbb0aa93e9e6cba5e5f)
- proper chuck length checking [`3c357cd`](https://github.com/ImageMagick/ImageMagick6/commit/3c357cdeda5ffb539f4433ccf7fc614ade6a7f37)
- Bump actions/download-artifact from 3 to 4 [`2ec3b1a`](https://github.com/ImageMagick/ImageMagick6/commit/2ec3b1a8f072214d4c405910df28e40000b8ee74)
- Bump actions/upload-artifact from 3 to 4 [`309214e`](https://github.com/ImageMagick/ImageMagick6/commit/309214e82ac0cba3833b08f20f5296eb922db63e)
- Bump github/codeql-action from 2 to 3 [`d0346c4`](https://github.com/ImageMagick/ImageMagick6/commit/d0346c41c00973220fa7335539658cdd6d92b94d)
- Use unique name for installers. [`e6c2207`](https://github.com/ImageMagick/ImageMagick6/commit/e6c220738081602df64cfd7df0fa7b04df98a2a9)
- Use different name for the installers. [`0cbf2af`](https://github.com/ImageMagick/ImageMagick6/commit/0cbf2af6e8b212b6904665d216b5a98281192101)
- Also include type in artifact name. [`1df262f`](https://github.com/ImageMagick/ImageMagick6/commit/1df262f4cd59b5e3ec0803ec7ae3f6c597387c69)
- fx calculations of skewness and kurtosis (https://github.com/ImageMagick/ImageMagick/issues/6964) [`0ede455`](https://github.com/ImageMagick/ImageMagick6/commit/0ede45552f02efd963247a924c016454ff6208fb)
- check if the string contains non-Latin1 characters [`4e612bd`](https://github.com/ImageMagick/ImageMagick6/commit/4e612bd6e2267a1128cfe128e12d7f5222a641ac)
- corrected patch to check for non-Latin1 characters [`2344b02`](https://github.com/ImageMagick/ImageMagick6/commit/2344b02328550e87ae3949e75cc4a5636d02e652)
- invalid JSON with -ping (https://github.com/ImageMagick/ImageMagick/issues/6966) [`58b88f4`](https://github.com/ImageMagick/ImageMagick6/commit/58b88f4b3a539ea97d07d34871aea9c1bd71ff89)
- invalid HTTPS certificates are no longer ignored (https://github.com/ImageMagick/ImageMagick/security/advisories/GHSA-3r24-6m6q-vxmr) [`387954c`](https://github.com/ImageMagick/ImageMagick6/commit/387954c948266347818b16cbe05ad7551bc398af)
- add RW2 + CR2 mime types [`bfc10fd`](https://github.com/ImageMagick/ImageMagick6/commit/bfc10fd888584f9abae6987f34363afbfc1506d2)
- release [`d9b4c63`](https://github.com/ImageMagick/ImageMagick6/commit/d9b4c63b585e8cededd91054cf50dc7eb3651ad3)
- no member named 'rawparams' (https://github.com/ImageMagick/ImageMagick/issues/6969) [`e1980f3`](https://github.com/ImageMagick/ImageMagick6/commit/e1980f3266bbcd6abd639b233f7e835448ebc101)
- release [`58a3cdf`](https://github.com/ImageMagick/ImageMagick6/commit/58a3cdfb272cc2b76f7b2062208532509e8c74d2)
- release [`56eb2b0`](https://github.com/ImageMagick/ImageMagick6/commit/56eb2b0f38a2d593ef8e61fdcbdf9354cce6e2e6)

## [6.9.13-1](https://github.com/ImageMagick/ImageMagick6/compare/6.9.13-0...6.9.13-1) - 2023-12-10

### Merged

- configure.ac: Fix bashism [`#292`](https://github.com/ImageMagick/ImageMagick6/pull/292)

### Commits

- eliminate compiler warning [`7d556fa`](https://github.com/ImageMagick/ImageMagick6/commit/7d556fa61e44bbc51192f9d47f5c22473ceb1661)
- eliminate compiler warning [`258655e`](https://github.com/ImageMagick/ImageMagick6/commit/258655e5e7b7f590606db71bec5c17be2b5d618e)
- eliminate compiler warning [`7a3b233`](https://github.com/ImageMagick/ImageMagick6/commit/7a3b233ce89154ebb48b41748705be3717e9cd2a)
- https://github.com/ImageMagick/ImageMagick/issues/2756 [`d07216a`](https://github.com/ImageMagick/ImageMagick6/commit/d07216ace9c2136ff4f9e910f586d9c67191bc51)
- support ODG vector format (https://github.com/ImageMagick/ImageMagick/issues/6827) [`548dc6f`](https://github.com/ImageMagick/ImageMagick6/commit/548dc6f15f7cd1b097fa9b35ec50c52a258504ee)
- support EPUB format [`6680857`](https://github.com/ImageMagick/ImageMagick6/commit/668085787477c0339e4ca8c2e1b5c24b8e5c6f00)
- headless is implied [`d4f2606`](https://github.com/ImageMagick/ImageMagick6/commit/d4f2606d6570b6abd2c01e2abe58579026d7082c)
- each image has its own time to live [`f89cf06`](https://github.com/ImageMagick/ImageMagick6/commit/f89cf06183176c1e3df6f2e283d1fa2c72d339f1)
- latest autoconf update [`8ad5a7a`](https://github.com/ImageMagick/ImageMagick6/commit/8ad5a7af3285bb7eff3b748b395f6d5e7431c914)
- https://github.com/ImageMagick/ImageMagick/issues/6845 [`8f26983`](https://github.com/ImageMagick/ImageMagick6/commit/8f269831a20dddf992b3b9b787e3105f6272e573)
- Sign executable and libraries with Azure Code Signing. [`c072ccb`](https://github.com/ImageMagick/ImageMagick6/commit/c072ccb42f0917103879768073fe21cbf587189f)
- Also run release build when the files is changed in the main branch or through a PR. [`f7076e4`](https://github.com/ImageMagick/ImageMagick6/commit/f7076e45b03d554d17e7057e28a0853dec0a1ca2)
- Also test daily build when it is changed in a pull request. [`296bc2c`](https://github.com/ImageMagick/ImageMagick6/commit/296bc2c34cdb8aca67ceac1b02a5810f9065bd55)
- Change Linux build to use ubuntu 20.04 instead. [`40c6a4a`](https://github.com/ImageMagick/ImageMagick6/commit/40c6a4a4e8b757268c2ffd787a1fbdcdf7f20935)
- Corrected paths. [`cb2d420`](https://github.com/ImageMagick/ImageMagick6/commit/cb2d420a690640d63c4ae7cfd6c862d943e68fdd)
- Use env:GITHUB_OUTPUT instead. [`f04bd8c`](https://github.com/ImageMagick/ImageMagick6/commit/f04bd8c3449783e84f0a2a9f1006a72b0ea3eaeb)
- switch to using GetEnvironmentVariableW on Windows [`0bedc3c`](https://github.com/ImageMagick/ImageMagick6/commit/0bedc3ccfb3287af7412c4991854db534bc7cec9)
- Disable code signing in a pull request. [`35086ba`](https://github.com/ImageMagick/ImageMagick6/commit/35086ba69f2dc8ec74232c9c8d1803b2578843af)
- Bump azure/azure-code-signing-action from 0.2.21 to 0.2.22 [`c01c814`](https://github.com/ImageMagick/ImageMagick6/commit/c01c8145efee5ebbd86a67d1e19949e8a5f76672)
- output correct security policy when configuring (https://github.com/ImageMagick/ImageMagick/issues/6863) [`0a9937f`](https://github.com/ImageMagick/ImageMagick6/commit/0a9937f3358c748f7cd2d3d5899a06355c9d4312)
- flush any potential write exceptions [`c660243`](https://github.com/ImageMagick/ImageMagick6/commit/c6602430984ea217c39cf3e974c899f109db7bca)
- improve I/O exception checking [`34f7e29`](https://github.com/ImageMagick/ImageMagick6/commit/34f7e299f18cd8e940380552e46b854a9780d300)
- eliminate compiler warnings [`38afd07`](https://github.com/ImageMagick/ImageMagick6/commit/38afd0774ae12883b5a6b294866481bc8f852971)
- improve I/O exception checking [`10cb1f0`](https://github.com/ImageMagick/ImageMagick6/commit/10cb1f0b0808c77c258fc6f09b606edadf0e35e1)
- improve I/O exception handling [`1ae02d5`](https://github.com/ImageMagick/ImageMagick6/commit/1ae02d5783ffdcdceba7c2f38ae947cd461ff9b6)
- miscellaneous nit fixes [`bd3fa94`](https://github.com/ImageMagick/ImageMagick6/commit/bd3fa94083c1fa03b9310e1d8ee771055a0c1f8c)
- spelling nit [`a2a9594`](https://github.com/ImageMagick/ImageMagick6/commit/a2a9594d7776d2a521f831e2c95b397985dfeb8a)
- blob status is a boolean [`0c955f3`](https://github.com/ImageMagick/ImageMagick6/commit/0c955f37d75fa613cb4b59c0d47e816814c6a504)
- blob status: 0 on success, -1 on exception [`90dabed`](https://github.com/ImageMagick/ImageMagick6/commit/90dabed56ae7f35e93f459105268f4b5cf47be7e)
- eliminate compiler warning [`c5705d8`](https://github.com/ImageMagick/ImageMagick6/commit/c5705d86fd12d28c2e3e2fe4b236087b9a1cf278)
- ensure JPEG size is always less than the jpeg:extent value [`1fdba2e`](https://github.com/ImageMagick/ImageMagick6/commit/1fdba2e131ea8198b0fd39a48454cf964332b49b)
- cosmetic [`00bab4b`](https://github.com/ImageMagick/ImageMagick6/commit/00bab4bd1bdb5f86bb3078b8962d733e47cb15d8)
- need to sync blob before we export its size [`9692fb6`](https://github.com/ImageMagick/ImageMagick6/commit/9692fb6a62b10020d3eae81246c96b0cdadc69ef)
- restore sync to CloseBlob() [`3b120de`](https://github.com/ImageMagick/ImageMagick6/commit/3b120debab5a3bcbfe4596673759a694c743bc42)
- don't calculate blob size if there is an I/O exception [`bac64ae`](https://github.com/ImageMagick/ImageMagick6/commit/bac64ae8770d406e1e0a235e0876c170322585e6)
- No longer include ffmpeg in our installer and portable. [`ad1b807`](https://github.com/ImageMagick/ImageMagick6/commit/ad1b80753b11f4e2357ad7d7433883d6f787ef57)
- can't write 8 bit floating-point pixels [`0419e2f`](https://github.com/ImageMagick/ImageMagick6/commit/0419e2fc6bbee9e6f6ad5d8ab88e5d9d8a94393b)
- latest automake/autoconf updates [`0da5975`](https://github.com/ImageMagick/ImageMagick6/commit/0da5975435250e30f5800f907f0c31a6f879a5a7)
- latest autoconf/automake updates [`e172d00`](https://github.com/ImageMagick/ImageMagick6/commit/e172d00e1bd427a74d2adcf05ebf32a7df39a956)
- some delegates require C++ [`6dc73c4`](https://github.com/ImageMagick/ImageMagick6/commit/6dc73c4a255ed837b29235f53e543a293f001559)
- throw exception if discovered when syncing a blob [`c8dafdc`](https://github.com/ImageMagick/ImageMagick6/commit/c8dafdc81b15652fa0f2e1da329861d6464d4c0d)
- check external delegate exit code [`fc45ce6`](https://github.com/ImageMagick/ImageMagick6/commit/fc45ce6a71d7998fe6df836b086531889cf3acc2)
- flush stdout [`7d381b0`](https://github.com/ImageMagick/ImageMagick6/commit/7d381b036e88f94bdfee33c9c3958d2c7eed8c26)
- eliminate compiler warnings [`665cbeb`](https://github.com/ImageMagick/ImageMagick6/commit/665cbeb0cc4b742ed154f334e81ae3ad1c6f67c4)
- eliminate compiler warnings [`db2f5fb`](https://github.com/ImageMagick/ImageMagick6/commit/db2f5fbdcb88376d234becf3ada6156885a753ef)
- Enums that are not flags should not be plural. [`556a4c0`](https://github.com/ImageMagick/ImageMagick6/commit/556a4c0afe8dc9eca78906294f9e06e85c783a61)
- Apply fix for heap buffer overflow that was already fixed in ImageMagick 7 (#290). [`057e5c0`](https://github.com/ImageMagick/ImageMagick6/commit/057e5c0a3babcb3278c52f6927cc4e0479132b62)
- revert [`4cc3206`](https://github.com/ImageMagick/ImageMagick6/commit/4cc3206c371b31f60f1e842c4fc703cf0720339b)
- eliminate compiler warning [`2b6a3cc`](https://github.com/ImageMagick/ImageMagick6/commit/2b6a3cce1b80dcce1f4bb5ed163e3cd7e79851ac)
- export OpenMP library [`663de8d`](https://github.com/ImageMagick/ImageMagick6/commit/663de8d8d37d3226c38e2a0a66afb8050b94b6b6)
- cosmetic [`7ee8dca`](https://github.com/ImageMagick/ImageMagick6/commit/7ee8dca841bae095bfee667c4e01f20722903c9f)
- display then write [`cb381a2`](https://github.com/ImageMagick/ImageMagick6/commit/cb381a26d12c551fa9b54f98937606b2465f74fb)
- clone image list to prevent any possible image side-effects [`f28d02e`](https://github.com/ImageMagick/ImageMagick6/commit/f28d02e9b0d98ed4f6532a352733b26aa9891fb5)
- ignore gzflush() status [`75d1cb7`](https://github.com/ImageMagick/ImageMagick6/commit/75d1cb7ea689e84c6767c3fdba9ea7050d4c5063)
- check for omp_get_num_threads in OpenMP library [`9c7b61a`](https://github.com/ImageMagick/ImageMagick6/commit/9c7b61aeeda892387b5411549265b59e1e46983a)
- detect libgomp when compiling with C++ [`0a93150`](https://github.com/ImageMagick/ImageMagick6/commit/0a93150da73367802d1b84871af2216525ec9ec5)
- correct openmp detection [`1e79961`](https://github.com/ImageMagick/ImageMagick6/commit/1e7996195c6701ed1faf35e40a7dbbef1c210e29)
- revert cloning of image list on write() [`2be8e3f`](https://github.com/ImageMagick/ImageMagick6/commit/2be8e3f40318540f2abc9eec1a88f4f1cc00cbc0)
- omp.h header is optional [`474e915`](https://github.com/ImageMagick/ImageMagick6/commit/474e9158b47635804c8129cf107913473a711402)
- use a portable format as not installations support JPEG/PNG [`3c786ca`](https://github.com/ImageMagick/ImageMagick6/commit/3c786ca85785be096354014789e6c940fbfd680a)
- don't proactively set a floating point MIFF image [`4ec1a3f`](https://github.com/ImageMagick/ImageMagick6/commit/4ec1a3fec04cf1f6de5dffb6077119400741fa9d)
- support title attribute [`8cb0969`](https://github.com/ImageMagick/ImageMagick6/commit/8cb096968fa0f96a1da4a72f02b3a9ecf7025418)
- get image title [`635e5d8`](https://github.com/ImageMagick/ImageMagick6/commit/635e5d8ed07a7378f3eaa7d8109db4edd1fb1505)
- update demo titles [`aabf322`](https://github.com/ImageMagick/ImageMagick6/commit/aabf3223b213362e5761222f7400a6d1ecfafb1e)
- correct image signature [`c45fe9a`](https://github.com/ImageMagick/ImageMagick6/commit/c45fe9a3576c07ad6ed5ef7f724d6f31bac823cd)
- clean up ImageMagick configuration results [`fc6e147`](https://github.com/ImageMagick/ImageMagick6/commit/fc6e1478a713d90f9bdb2fab60aa891c3ba4bd32)
- don't sync when getting blob size [`9bb7d49`](https://github.com/ImageMagick/ImageMagick6/commit/9bb7d4942a65f8d0429f70bb86ede4a9954baea1)
- cosmetic [`ec14da5`](https://github.com/ImageMagick/ImageMagick6/commit/ec14da54cfbeb2785676413a5cae5d4b7f84b454)
- respect --disable-openmp [`e9e3657`](https://github.com/ImageMagick/ImageMagick6/commit/e9e365721f7433e3b9838b9625e4817a75c97c6a)
- release [`4712685`](https://github.com/ImageMagick/ImageMagick6/commit/4712685794628caa7fa61cc2a5063b6879f6d55a)
- fix reading Windows 1.x icon file format [`511167b`](https://github.com/ImageMagick/ImageMagick6/commit/511167bbf0ee2dda99f5adb537bc8779e42dcc74)
- release [`465c31f`](https://github.com/ImageMagick/ImageMagick6/commit/465c31fe52bd8850268a26ba7470cea826b6867b)
- release [`4198ed0`](https://github.com/ImageMagick/ImageMagick6/commit/4198ed0d41a9f077a9aa9cc5ef2ef6efe2e8b066)
- release [`5b6b9f9`](https://github.com/ImageMagick/ImageMagick6/commit/5b6b9f9d809da4b52f8d775ed3ece2fe921b41cb)
- beta release [`4a1d8f3`](https://github.com/ImageMagick/ImageMagick6/commit/4a1d8f3cb030efd1a9c2d09e165ff66ae933ea5a)
- cosmetic [`a316650`](https://github.com/ImageMagick/ImageMagick6/commit/a316650dcc7bf02e6c966f4508a691333887667c)
- set time_t maximum (https://github.com/ImageMagick/ImageMagick/issues/6891) [`a05ca02`](https://github.com/ImageMagick/ImageMagick6/commit/a05ca02c6e264258a2daa015a3dee9d29ee6df41)
- cosmetic [`f66ed25`](https://github.com/ImageMagick/ImageMagick6/commit/f66ed25daab5fc2edb63730b9be028ae82fc05a2)
- support Visio vector format [`c9e2d59`](https://github.com/ImageMagick/ImageMagick6/commit/c9e2d59c9d02db4528f885947c6cd77672b7469a)
- detected memory leaks [`c54f176`](https://github.com/ImageMagick/ImageMagick6/commit/c54f176848f78adfa20ee704652e5c619b7ba878)
- xc: code is not always guarenteed to return an image (https://github.com/ImageMagick/ImageMagick/issues/6917) [`4d3ee5c`](https://github.com/ImageMagick/ImageMagick6/commit/4d3ee5c05246d92cd925673a5cce6919cddb6a01)
- Corrected return value. [`f7cd870`](https://github.com/ImageMagick/ImageMagick6/commit/f7cd8708b3bdbe4cb07e96f957cb18b0d6b6f515)
- Set ttl to time when the image will expire instead of the duration that the image can be used. [`864e56b`](https://github.com/ImageMagick/ImageMagick6/commit/864e56bc561ea034e02b4c9f26c366b2eb8d29e0)
- latest documentation update [`c1b5f2c`](https://github.com/ImageMagick/ImageMagick6/commit/c1b5f2ce16cd38bc37015cb2898973e7de7e07a9)
- update link [`0488a26`](https://github.com/ImageMagick/ImageMagick6/commit/0488a26e2e089ee29b5a28b3d72f1471cb094dea)
- latest autoconf update [`f73c126`](https://github.com/ImageMagick/ImageMagick6/commit/f73c12620b5ecb6ac0011b2dbafcbcda06b110a6)
- add link to license [`1830835`](https://github.com/ImageMagick/ImageMagick6/commit/18308352057c00cba88d301105100ef20a79984d)
- normalize statistics to prevent numeric instability [`ae46413`](https://github.com/ImageMagick/ImageMagick6/commit/ae4641319dfd6c92680f00ddd475aa617fd0ccaf)
- use gray pixel rather than opacity to create mask [`f3941be`](https://github.com/ImageMagick/ImageMagick6/commit/f3941be6c53aa78104441d836792c00c406e2d3b)
- update links [`eb0db3e`](https://github.com/ImageMagick/ImageMagick6/commit/eb0db3e8a938c5faa6d1780c40db4df70d4f8e4d)
- release [`006f3e9`](https://github.com/ImageMagick/ImageMagick6/commit/006f3e91cd72ef6b7285d3d5151bdef562e6bcbe)
- beta release [`1d28aee`](https://github.com/ImageMagick/ImageMagick6/commit/1d28aeeb223355ebdd51b73738a8fd03af033577)
- release [`87c1749`](https://github.com/ImageMagick/ImageMagick6/commit/87c1749a15ca1be394ff7488268ec2b595959465)

## [6.9.13-0](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-99...6.9.13-0) - 2023-10-28

### Commits

- beta release [`20a3c58`](https://github.com/ImageMagick/ImageMagick6/commit/20a3c58f9f4f269985a1bbaa46e1630d76b51de0)
- limit points drawned along an arc [`7be3e22`](https://github.com/ImageMagick/ImageMagick6/commit/7be3e221b73c5bd8a19e58cbaae9a039140dda02)
- correct for bytes per line [`0470517`](https://github.com/ImageMagick/ImageMagick6/commit/047051789abac4e9c1b44c593fab9ddb6fb2d30a)
- https://github.com/ImageMagick/ImageMagick/issues/6623 [`b9d07c6`](https://github.com/ImageMagick/ImageMagick6/commit/b9d07c6830a5e6bfef7e1e6418210d87ae71dfc9)
- eliminate compile warning [`3f3f8c1`](https://github.com/ImageMagick/ImageMagick6/commit/3f3f8c1debd3442333553c6d1884e6d290dfa01a)
- correct valid pixel offset [`f0f1042`](https://github.com/ImageMagick/ImageMagick6/commit/f0f104288f64d9bcc95202ac6fa6bcdeaccce922)
- correct valid pixel offset [`4d79bb5`](https://github.com/ImageMagick/ImageMagick6/commit/4d79bb5d93c4e3a750944d97e17aac5afe63ce8c)
- correct pixel offset check [`24403f0`](https://github.com/ImageMagick/ImageMagick6/commit/24403f0b27af57ed467ae8a099c52905f03eddd2)
- check for out-of-bounds implode factor [`4a4e625`](https://github.com/ImageMagick/ImageMagick6/commit/4a4e625de2b619e3bc166d866d0c0fdff724627a)
- add missing null check [`51d8bb2`](https://github.com/ImageMagick/ImageMagick6/commit/51d8bb2b686f072e7e071ab51565550189bebe2c)
- respect max-memory-request user policy [`e34171e`](https://github.com/ImageMagick/ImageMagick6/commit/e34171e6898ce4b069ed28343af5c3ee023d17d0)
- support precision user policy [`40bb7ea`](https://github.com/ImageMagick/ImageMagick6/commit/40bb7ea5c419aceedcaf9889b60cd8d473d89617)
- new default time to live [`b14e5a5`](https://github.com/ImageMagick/ImageMagick6/commit/b14e5a5d21df2e720cdc6ef085312117bf0d9ade)
- time INT_MAX is unlimited [`ca1aca5`](https://github.com/ImageMagick/ImageMagick6/commit/ca1aca5ca3f2dd7940e20d10d30d348df634eb48)
- Removed code signing because the certificate expired and will not be renewed. [`189ae04`](https://github.com/ImageMagick/ImageMagick6/commit/189ae04acd26b04dfd68ccc306999befb15331be)
- release [`b3e4902`](https://github.com/ImageMagick/ImageMagick6/commit/b3e4902a669a57a87ad7b985fbef6710968c90f7)

## [6.9.12-99](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-98...6.9.12-99) - 2023-10-21

### Merged

- Add the up to date "Artifex" name to Ghostscript list [`#281`](https://github.com/ImageMagick/ImageMagick6/pull/281)

### Commits

- beta release [`72c96a8`](https://github.com/ImageMagick/ImageMagick6/commit/72c96a81cb4f022b558849e4b03d404e6b834e9e)
- include paths for Stawberry perl build of PerlMagick [`7100cc9`](https://github.com/ImageMagick/ImageMagick6/commit/7100cc9021b9982c81cf5c95374f54bf03a73c7c)
- time-to-live returned incorrect results when SOURCE_DATE_EPOCH set (https://github.com/ImageMagick/ImageMagick6/issues/278) [`eb9ac36`](https://github.com/ImageMagick/ImageMagick6/commit/eb9ac36ffbeb57bebeefe48a8c9b0bb1f057561b)
- https://github.com/ImageMagick/ImageMagick/issues/6775 [`23187cd`](https://github.com/ImageMagick/ImageMagick6/commit/23187cd6a9b711d60307aadec5eb694696508044)
- add Artiflex name to Ghostscript list [`fcafb64`](https://github.com/ImageMagick/ImageMagick6/commit/fcafb6487915fb3f8dd2984e203ef49a9ecd9a42)
- Revert change. [`76e1847`](https://github.com/ImageMagick/ImageMagick6/commit/76e1847a525d894b55415c67db22611068d8fc4e)
- Only use the recent names to do the Ghostscript registry lookup and search for the commercial version first. [`6afe7e3`](https://github.com/ImageMagick/ImageMagick6/commit/6afe7e397b2482d11e71e9859d340e3cd4220401)
- support time to live neumonics, e.g. 2 minutes [`aefd30a`](https://github.com/ImageMagick/ImageMagick6/commit/aefd30a76aad33c7ea62a3d8b3964d7c5fe9d07b)
- remove private method GetMagickTTL() [`d2e658c`](https://github.com/ImageMagick/ImageMagick6/commit/d2e658c544f02bbeb84e728cd84fba2a2e9e9039)
- moderate the CPU delay [`9af1d64`](https://github.com/ImageMagick/ImageMagick6/commit/9af1d64db344561caa42a73b8bdc72de466a862a)
- cosmetic [`f11ed36`](https://github.com/ImageMagick/ImageMagick6/commit/f11ed36c0a14ee1117dcc3542380de83918e138d)
- format time to live [`b6d966a`](https://github.com/ImageMagick/ImageMagick6/commit/b6d966a2c6cd8badb522562a3b705c9c37845977)
- cosmetic [`74da07b`](https://github.com/ImageMagick/ImageMagick6/commit/74da07b1de1c400ea61532adc58cff9851d7959b)
- correct # of seconds in month [`32d7bc0`](https://github.com/ImageMagick/ImageMagick6/commit/32d7bc06a478a49665480786b1f41004bb6fb07c)
- fix formatting time-to-live [`c6b041b`](https://github.com/ImageMagick/ImageMagick6/commit/c6b041bb8eae0420c5fcf957e1062930e2e9a9d3)
- clarify time to live [`16e7c9f`](https://github.com/ImageMagick/ImageMagick6/commit/16e7c9f7af67724a769f2f78aa94ad6ab4233e2a)
- utilize difftime() to subtract time to live [`5b91181`](https://github.com/ImageMagick/ImageMagick6/commit/5b911811cfbc5ba2bb48c93470625d0eb047836c)
- convert source epoch to unsigned it [`c8acd3e`](https://github.com/ImageMagick/ImageMagick6/commit/c8acd3e3e0ffae6c7309909598f379ae21456adc)
- time to live default is infinity [`9a9f1d6`](https://github.com/ImageMagick/ImageMagick6/commit/9a9f1d6fdcb7f24e6a33dd1be48218a3fc093626)
- latest autoconf/automake [`119eb49`](https://github.com/ImageMagick/ImageMagick6/commit/119eb49c9fb31c08b2fb260b124b593fca436e85)
- latest autoconf/automake updates [`a3a4d8b`](https://github.com/ImageMagick/ImageMagick6/commit/a3a4d8bf2735b2cb88837dcc6f670e92fe662ebb)
- assume time_t is signed [`1ee5fa3`](https://github.com/ImageMagick/ImageMagick6/commit/1ee5fa3591513db14d11beb9aff49c1c273a1897)
- largest value is MAGICK_SIZE_MAX [`00bcef4`](https://github.com/ImageMagick/ImageMagick6/commit/00bcef44d2f87f3c2930542f601fde7e1006b61c)
- prevent possible integer overlflow [`9808c03`](https://github.com/ImageMagick/ImageMagick6/commit/9808c038346231af525259b1e39fa40a87a3d274)
- SetMagickSecurityPolicy() permits user policies to comingle with system [`e43e7a7`](https://github.com/ImageMagick/ImageMagick6/commit/e43e7a7bbca56a3360d8d7cd87ccdfb81256af3a)
- eliminate compiler warnings [`26390bf`](https://github.com/ImageMagick/ImageMagick6/commit/26390bfc0a05b5c98c346218ac8c8edad86f590c)
- eliminate compiler exception [`ea3ee62`](https://github.com/ImageMagick/ImageMagick6/commit/ea3ee629c6ed86c2825fee4142142f22f819de0e)
- permit all user policies [`c3e0f4a`](https://github.com/ImageMagick/ImageMagick6/commit/c3e0f4a5315c3bf024f20f48615ede58c1dc4a65)
- allow user to comingle with system policies [`eff569d`](https://github.com/ImageMagick/ImageMagick6/commit/eff569d764c694d3913c8b836cb7d9dd1a398d0b)
- find minimum policy value [`ea5df97`](https://github.com/ImageMagick/ImageMagick6/commit/ea5df974eec37b2c27ea6a404869a23b597a10df)
- find minimum policy value [`fc9222b`](https://github.com/ImageMagick/ImageMagick6/commit/fc9222b8450039e8794d08f98144029a6384f867)
- revert [`66871a5`](https://github.com/ImageMagick/ImageMagick6/commit/66871a5f0f89c7c3bd1830b5fd26b5e4fd6afff3)
- off by one exception [`5587a0e`](https://github.com/ImageMagick/ImageMagick6/commit/5587a0ec601135e4e2c98ca204a75b7484a44584)
- correct bytes per line calculation [`3372255`](https://github.com/ImageMagick/ImageMagick6/commit/337225582be0e4b3c6a395c5fcc2732684a2b3ab)
- revert [`4a0699f`](https://github.com/ImageMagick/ImageMagick6/commit/4a0699f969293fe7d11c3171913615ec437d46b8)
- set PNG maximum chunk size to default [`09b7ea4`](https://github.com/ImageMagick/ImageMagick6/commit/09b7ea4bc06f2d13055025003fd321186fd55973)
- clarify SetMagickSecurityPolicy() [`bdd8b64`](https://github.com/ImageMagick/ImageMagick6/commit/bdd8b648ce0e20a4bb298148a6744e695a6a46d8)
- release [`2d175da`](https://github.com/ImageMagick/ImageMagick6/commit/2d175da8a01772935b23e05fb00c608cd2422d30)

## [6.9.12-98](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-97...6.9.12-98) - 2023-10-08

### Commits

- beta release [`148a129`](https://github.com/ImageMagick/ImageMagick6/commit/148a129da39795b3d60088aa6388fa5b7b9a943f)
- ... [`4428cd3`](https://github.com/ImageMagick/ImageMagick6/commit/4428cd3ed06a0ec7c3da05c28bf80e70161fd6d9)
- support Windows 1.0 Icon format (https://github.com/ImageMagick/ImageMagick/discussions/6670) [`b655528`](https://github.com/ImageMagick/ImageMagick6/commit/b655528e86e277cea0ebcb61c4accab877d16648)
- enable OpenCL build (https://github.com/ImageMagick/ImageMagick6/issues/275) [`7a828b0`](https://github.com/ImageMagick/ImageMagick6/commit/7a828b0a8079c335385a2b0aa235d39350919ab6)
- eliminate compiler error [`acf041a`](https://github.com/ImageMagick/ImageMagick6/commit/acf041abd7c1ce7131b3e492d5daaae2266f7f96)
- support GetMagickTTL() method (https://github.com/ImageMagick/ImageMagick/discussions/4533) [`cb72a81`](https://github.com/ImageMagick/ImageMagick6/commit/cb72a8195e4d42de4ac17f2fd74bf3cf6f074414)
- fix time-to-live deadlock [`84c4069`](https://github.com/ImageMagick/ImageMagick6/commit/84c40698f666253dbbe7cd51d442cc938a2484af)
- improve time-to-live timer [`2a88880`](https://github.com/ImageMagick/ImageMagick6/commit/2a888803be8ab466dff7f5a4f6cfc4a80482588d)
- prevent integer overflow [`6b472d8`](https://github.com/ImageMagick/ImageMagick6/commit/6b472d8e595e4866492732e89efa19ca734966ce)
- wrong argument type [`bae5e88`](https://github.com/ImageMagick/ImageMagick6/commit/bae5e8880f0fc406eb58c8ece9190c4fe42165e8)
- check time to live every 4096 cycles [`0d53915`](https://github.com/ImageMagick/ImageMagick6/commit/0d53915c4df7776d6403c6a55a24afb668b9236d)
- Added missing include. [`2e35f12`](https://github.com/ImageMagick/ImageMagick6/commit/2e35f12dad788bc907131cd5530cfeeed7ab7399)
- support xmp:validate define to choose performance over security [`d7f5f6e`](https://github.com/ImageMagick/ImageMagick6/commit/d7f5f6efb45e414dd434b64a4bbdaa49c0b368b9)
- eliminate compiler warning [`0887bbf`](https://github.com/ImageMagick/ImageMagick6/commit/0887bbf1eef9e8c2961abc2231bb70a469c34e8a)
- protect against DOS for FX do, while, for loops [`fe77ef5`](https://github.com/ImageMagick/ImageMagick6/commit/fe77ef5817d03e4400948514ec3bb112efb798f2)
- release [`0f7e3a7`](https://github.com/ImageMagick/ImageMagick6/commit/0f7e3a7a70d6b169a36f60470c6c06e0831730d0)

## [6.9.12-97](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-96...6.9.12-97) - 2023-09-30

### Commits

- beta release [`51d4282`](https://github.com/ImageMagick/ImageMagick6/commit/51d428243c40e9c7cd770e0896e015f323f3d661)
- eliminate Coverity warnings [`8856c26`](https://github.com/ImageMagick/ImageMagick6/commit/8856c26cd521bb177da5d324d3d6ef115d6a5e7c)
- max result is SIZE_MAX [`c9e5972`](https://github.com/ImageMagick/ImageMagick6/commit/c9e59720d57a4729f5fba8c4144a12d1235cc866)
- check for BMP file size, poc provided by Hardik Shah of Vehere (Dawn Treaders team) [`4056846`](https://github.com/ImageMagick/ImageMagick6/commit/405684654eb9b43424c3c0276ea343681021d9e0)
- throw exception but do not close/destroy image inside ReadEmbedImage() [`c6eb668`](https://github.com/ImageMagick/ImageMagick6/commit/c6eb668946cb3cc0d18254cc6ea2798d4503b865)
- don't trust an XMP profile if its not validated [`a0812ea`](https://github.com/ImageMagick/ImageMagick6/commit/a0812ea4d8aa6af1e6a2654b6a338ce640638dc6)
- revert [`397b8e5`](https://github.com/ImageMagick/ImageMagick6/commit/397b8e58f8da97a794dd28a4ea52d12a62677929)
- eliminate compiler warnings [`d1ad8e7`](https://github.com/ImageMagick/ImageMagick6/commit/d1ad8e75f9b84edece89df5085e364f17dcc774b)
- fix building with OpenCL (#6743) [`834a5d4`](https://github.com/ImageMagick/ImageMagick6/commit/834a5d40ef70d288d19c49cef98dcf07a02b1464)
- correct exit code (https://github.com/ImageMagick/ImageMagick/issues/6744) [`d730d3e`](https://github.com/ImageMagick/ImageMagick6/commit/d730d3ec46718c455395da8dc0ea77348cc56158)
- Don't add svg:decode to the list of build in delegates when librsvg was enabled (#274). [`abb87fc`](https://github.com/ImageMagick/ImageMagick6/commit/abb87fce6330eb778fe3d2a5c9b5a523e4b42c53)
- fix compose dissolve issue (https://github.com/ImageMagick/ImageMagick/issues/6738) [`1926121`](https://github.com/ImageMagick/ImageMagick6/commit/192612179fdc496eacc701655ed9f059e6efd964)
- move check for number of colors [`c504e54`](https://github.com/ImageMagick/ImageMagick6/commit/c504e543eabf9439e035a7b57044ea03bfec364e)
- support raw parameters (https://github.com/ImageMagick/ImageMagick/discussions/6748) [`2245bf7`](https://github.com/ImageMagick/ImageMagick6/commit/2245bf7ddbcef62e3475191ab55bd5bd1b31aadb)
- release [`2a749f7`](https://github.com/ImageMagick/ImageMagick6/commit/2a749f753f2160b6104046edea3a68fc6a945450)
- eliminate compiler exception [`0cd4e70`](https://github.com/ImageMagick/ImageMagick6/commit/0cd4e70b2cdaee347b9966a9a945c0b877e0f3ff)
- eliminate compiler exception [`6ece5dc`](https://github.com/ImageMagick/ImageMagick6/commit/6ece5dc64ac98059a6bd2c3197b39003f1c4d5bb)
- release [`2ca57b2`](https://github.com/ImageMagick/ImageMagick6/commit/2ca57b26c049ce63ebd36a5a598b52a247c02182)

## [6.9.12-96](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-95...6.9.12-96) - 2023-09-23

### Commits

- beta release [`cf44454`](https://github.com/ImageMagick/ImageMagick6/commit/cf44454e8274d800baba6675e0a560ff22f92655)
- eliminate static analyzer issue [`535fff7`](https://github.com/ImageMagick/ImageMagick6/commit/535fff7d6596dc87030582689b682bed154b6c9f)
- eliminate static analyzer issue [`ec2b706`](https://github.com/ImageMagick/ImageMagick6/commit/ec2b706423a9403cb6fd538b8a3a065ed2a36152)
- properly extract EXIF GPS fractions [`bbfe4dd`](https://github.com/ImageMagick/ImageMagick6/commit/bbfe4ddecd0e92b227158bef7ee9d72111583b8c)
- revert type cast [`e4c20bc`](https://github.com/ImageMagick/ImageMagick6/commit/e4c20bc9ef167e42647cdbed8081c86d8c6916fb)
- set windows to NULL [`9174a69`](https://github.com/ImageMagick/ImageMagick6/commit/9174a69046be88639aeabe8c318a9be362e64b82)
- Fixed building fourier.c on Windows with Visual Studio (#6667) [`3a1d164`](https://github.com/ImageMagick/ImageMagick6/commit/3a1d16428c0786b16a5e954f0ad6a07b14359371)
- cosmetic [`9d9257b`](https://github.com/ImageMagick/ImageMagick6/commit/9d9257b7a513bf6ddfd68e932bbb7b84ce79e298)
- release [`34f40bb`](https://github.com/ImageMagick/ImageMagick6/commit/34f40bb8d305031449066a0062c67cc95fcebb78)

## [6.9.12-95](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-94...6.9.12-95) - 2023-09-19

### Merged

- fix type cast [`#269`](https://github.com/ImageMagick/ImageMagick6/pull/269)

### Commits

- beta release [`ffb46b1`](https://github.com/ImageMagick/ImageMagick6/commit/ffb46b1ebccc0d8eb62eae5f280d7f951bcf1d11)
- validate security policy [`bf69ab4`](https://github.com/ImageMagick/ImageMagick6/commit/bf69ab4222139459203db35a7464ecbf0d7f6ca7)
- eliminate compiler warnings [`5c25385`](https://github.com/ImageMagick/ImageMagick6/commit/5c253859988f3cd85538ea3130b1113456dcfa90)
- eliminate compiler warning [`9d073e8`](https://github.com/ImageMagick/ImageMagick6/commit/9d073e8a61f119f8073d814ba4b348a570150581)
- cosmetic [`49d8c29`](https://github.com/ImageMagick/ImageMagick6/commit/49d8c291b61834f323e2e8c23108298dc02a9945)
- validate policy before we set it [`276f31a`](https://github.com/ImageMagick/ImageMagick6/commit/276f31a449833c047d9afc445667f460af65eccb)
- release [`9202885`](https://github.com/ImageMagick/ImageMagick6/commit/920288540785c93dcb2384f195e9f567df2d021d)

## [6.9.12-94](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-93...6.9.12-94) - 2023-09-17

### Merged

- Backport the ClosestColor improvement from 7.1.0-58 to ImageMagick-6. [`#257`](https://github.com/ImageMagick/ImageMagick6/pull/257)

### Commits

- beta release [`ad92edb`](https://github.com/ImageMagick/ImageMagick6/commit/ad92edb6c5a707f44c856963c11f8f2ee9343b4e)
- option to display build compiler [`7aacae6`](https://github.com/ImageMagick/ImageMagick6/commit/7aacae6d34fa6cae9e783ebb71c415e734af6e6f)
- correct exception tag [`2624ce3`](https://github.com/ImageMagick/ImageMagick6/commit/2624ce39f1d33cf0b5d8069e30ac691565a27599)
- Fix possible memory leak when format doesn't support encoding. [`bc9d115`](https://github.com/ImageMagick/ImageMagick6/commit/bc9d115eaf3badcc2609d043f1930fd6e13311f8)
- eliminate compiler warnings [`1c4fe73`](https://github.com/ImageMagick/ImageMagick6/commit/1c4fe732b6537e39f509738321dcf565d9eb2f26)
- read APNG losslessly [`7bd113a`](https://github.com/ImageMagick/ImageMagick6/commit/7bd113a7617e5af7b22c3981d701e59168f442bc)
- eliminate compiler warnings [`0682575`](https://github.com/ImageMagick/ImageMagick6/commit/0682575dd496f8077eddeecdcfa3bd32a1d8ef89)
- limit the number of XCF layers [`a4137de`](https://github.com/ImageMagick/ImageMagick6/commit/a4137de778f7f3e69ba4666d19e2ba08be4b108a)
- OpenMP advisement [`57b3dd4`](https://github.com/ImageMagick/ImageMagick6/commit/57b3dd43be6668b41dbac26ae7082855bc5594df)
- eliminate compiler warnings [`0d70d19`](https://github.com/ImageMagick/ImageMagick6/commit/0d70d190b7cb7a65d04795ea5a6a7a5dc9e9fe7e)
- check the image list length [`4bec491`](https://github.com/ImageMagick/ImageMagick6/commit/4bec491110e1322ca31622e163301ed0562c7abc)
- eliminate compiler warnings [`9620786`](https://github.com/ImageMagick/ImageMagick6/commit/96207860701be461523f2439159eb2cf45f5d0fa)
- eliminate compiler warnings [`ca4da25`](https://github.com/ImageMagick/ImageMagick6/commit/ca4da25bc4451cb37a603e3199e4920574be32fe)
- Fixed memory leak in AcquireDrawingWand that occurs when image is null. [`678bd7a`](https://github.com/ImageMagick/ImageMagick6/commit/678bd7acc186ea19619bbee5f6f3babef9555a87)
- wrong cast [`9b4a8cf`](https://github.com/ImageMagick/ImageMagick6/commit/9b4a8cfb5ba95bb9b7252fbdda8f859745834a91)
- eliminate compiler warnings [`6bc911e`](https://github.com/ImageMagick/ImageMagick6/commit/6bc911e1d603bc92769ab521fae9538152d9debf)
- support new configure script option: --with-security-policy={open,limited,secure,web-safe} [`ba39057`](https://github.com/ImageMagick/ImageMagick6/commit/ba3905764b8f995706dcea915ea587fb79dbd490)
- update documentation [`480c736`](https://github.com/ImageMagick/ImageMagick6/commit/480c7365a64d5b3cf7b95152dec1745a3e94eac2)
- security policy configuration [`6e1a710`](https://github.com/ImageMagick/ImageMagick6/commit/6e1a710148f1af3d46d4cd1da80cfa222cea2171)
- baseline security policies [`8f3bdb8`](https://github.com/ImageMagick/ImageMagick6/commit/8f3bdb828db439bda2f8c2f8e787b14da9cfa968)
- security policy patch [`e5e2f87`](https://github.com/ImageMagick/ImageMagick6/commit/e5e2f87664ab0f8105fd2738413f60dd21c5506a)
- update security policy variants [`bf9bc7f`](https://github.com/ImageMagick/ImageMagick6/commit/bf9bc7fee9f3cea9ab8557ad1573a57258eab95b)
- check against valid chunk sizes [`bed025f`](https://github.com/ImageMagick/ImageMagick6/commit/bed025facb906767f9e99610bb1afcf3af302af6)
- check stat() status [`92804dc`](https://github.com/ImageMagick/ImageMagick6/commit/92804dc57f24668f5e81c1906bd2fef0de1fdb68)
- use libraw’s camera white balance adjustment as default, use dng:use-camera-wb=false to disable [`267dc74`](https://github.com/ImageMagick/ImageMagick6/commit/267dc7409804e50943a484d559886d74af3cd8b0)
- Corrected check for define. [`c684aba`](https://github.com/ImageMagick/ImageMagick6/commit/c684aba196f875ef567bff691854591c6e355bfe)
- WEBP now respects ping (https://github.com/ImageMagick/ImageMagick/issues/6572) [`df401e6`](https://github.com/ImageMagick/ImageMagick6/commit/df401e603dc7f414a4c60f2edb0dc236c16b54b4)
- egrep is deprecated [`04d7f54`](https://github.com/ImageMagick/ImageMagick6/commit/04d7f5474cff8821be7f80fb69e922198c453982)
- tweaks to default security policies [`b60b47c`](https://github.com/ImageMagick/ImageMagick6/commit/b60b47c3f26c2e6f1d2fdaeeece895c4f90606f5)
- validate policies @ https://imagemagick-secevaluator.doyensec.com/ [`7991812`](https://github.com/ImageMagick/ImageMagick6/commit/79918124d9a8b8acd0784e2ff0913116f447ca40)
- respect `ping` when reading DJVU images (https://github.com/ImageMagick/ImageMagick/issues/6584) [`0008b12`](https://github.com/ImageMagick/ImageMagick6/commit/0008b129bec84cdb68deb9610637fe340ccfe1d3)
- properly extract EXIF multiple values [`42398d9`](https://github.com/ImageMagick/ImageMagick6/commit/42398d9c90d8a1da3976e82f0f0187e98c8fd3a5)
- read unspecified extra samples (https://github.com/ImageMagick/ImageMagick6/issues/261) [`c46a3a0`](https://github.com/ImageMagick/ImageMagick6/commit/c46a3a0ed406b3e67cea997acbae1035bbeff12a)
- silence compiler warnings [`3f0cd96`](https://github.com/ImageMagick/ImageMagick6/commit/3f0cd96736b1e65467431d120cea05e3ff016e8c)
- mention the security policy validator [`3667eaf`](https://github.com/ImageMagick/ImageMagick6/commit/3667eaf85b08db7adc6e6108025e25c4853e025d)
- set max pixel width/height to 4K [`36ab6eb`](https://github.com/ImageMagick/ImageMagick6/commit/36ab6eb49f20ab7a045c1f39ae95096b8fd3faa6)
- correct spelling error [`79d9efe`](https://github.com/ImageMagick/ImageMagick6/commit/79d9efec78d1f0fdc17c9031a501aaf3b7b7a8f6)
- remove volatile keyword [`b0664d5`](https://github.com/ImageMagick/ImageMagick6/commit/b0664d55a0a801489b92cfc96d28fd5dde5932cd)
- improve policy description [`06e3ecf`](https://github.com/ImageMagick/ImageMagick6/commit/06e3ecfe67aca216d5f37d51b0b8126ce61afc57)
- Group policy files together. [`d2780a3`](https://github.com/ImageMagick/ImageMagick6/commit/d2780a3a54950ebd152716ae7cb19c2b0f48f8c8)
- rename security policies [`2b6b365`](https://github.com/ImageMagick/ImageMagick6/commit/2b6b365d153c1a326d38a084f418be3a1c6ef42c)
- ... [`4f68772`](https://github.com/ImageMagick/ImageMagick6/commit/4f68772b48167aa4fcb1b66732820b76e4a1e3e4)
- fix HSL modulation when hue is 60 (https://github.com/ImageMagick/ImageMagick/issues/6602) [`624d04c`](https://github.com/ImageMagick/ImageMagick6/commit/624d04c39a9dc6a9eabfeb5315184fa0010b01d5)
- limit the number of unit test threads [`40a39e6`](https://github.com/ImageMagick/ImageMagick6/commit/40a39e60ac02ce6db988f7ef6eafd06788a5fe21)
- improve security policy documentation [`41f13a7`](https://github.com/ImageMagick/ImageMagick6/commit/41f13a7277705b618ddbd930a8a1bf460690a056)
- account for extra bytes at end of a DICOM image (https://github.com/ImageMagick/ImageMagick/issues/6566) [`093e1db`](https://github.com/ImageMagick/ImageMagick6/commit/093e1db7fc9d8a3ef0b12c9665f4f07a0a24eac7)
- comparison of integers of different signs [`e8eef8c`](https://github.com/ImageMagick/ImageMagick6/commit/e8eef8ca18b82e5ebc16c673f488414becd1738f)
- add missing typecast [`0304430`](https://github.com/ImageMagick/ImageMagick6/commit/0304430e4c91fe0af11365bb46c15b182c2fced6)
- improved C++ support [`a854348`](https://github.com/ImageMagick/ImageMagick6/commit/a85434889d558c86e5d91b23f9b6c598f9357ac7)
- eliminate compiler warning [`5437db8`](https://github.com/ImageMagick/ImageMagick6/commit/5437db89effb8e9f36acc376cf497c6927250c68)
- prevent a possible double link free [`65783a2`](https://github.com/ImageMagick/ImageMagick6/commit/65783a234b3d5cf18753915694ace311c25942de)
- cosmetic [`7b56bc1`](https://github.com/ImageMagick/ImageMagick6/commit/7b56bc18d0c64f35a650e0e39819f3281b7278f8)
- allow MPC images [`85fc29c`](https://github.com/ImageMagick/ImageMagick6/commit/85fc29cb9603937ac8338aa61bd12b631abfb9c5)
- improve CPU throttle check [`f4f1adf`](https://github.com/ImageMagick/ImageMagick6/commit/f4f1adff393bd8f5a79886ff2b4c4564f20fc4f9)
- some say BMP and TIFF images "web safe" [`b0288e3`](https://github.com/ImageMagick/ImageMagick6/commit/b0288e323a7ce38da8d591dd72decb3568bbe221)
- allow writing JSON images [`f997009`](https://github.com/ImageMagick/ImageMagick6/commit/f997009dd5eb83ac6f3146978a01919a1aab757b)
- latest autoconf automake updates [`12dbc46`](https://github.com/ImageMagick/ImageMagick6/commit/12dbc46382fce06e667788d6887db08f9e2bcff1)
- more transparent shadow [`6f1815b`](https://github.com/ImageMagick/ImageMagick6/commit/6f1815bf0f0e1d4d5c9ed03c008583bd01bf8ce6)
- prevent implode from blowing up (https://github.com/ImageMagick/ImageMagick/issues/6623) [`3183524`](https://github.com/ImageMagick/ImageMagick6/commit/3183524503fb3dc0431a119746d992d9905ca98a)
- doc update [`41e02a5`](https://github.com/ImageMagick/ImageMagick6/commit/41e02a5b17b3f64565839134197fe169a838dd12)
- check for cache offset boundaries [`c9988d0`](https://github.com/ImageMagick/ImageMagick6/commit/c9988d09df4daa322678e9e9eb0331eb75d33eac)
- eliminate compiler warning [`c5bc4b0`](https://github.com/ImageMagick/ImageMagick6/commit/c5bc4b0f85030395a6b2e34973ff90fc019d15bb)
- account for boundary condition [`cec3678`](https://github.com/ImageMagick/ImageMagick6/commit/cec3678dbec609548804ef4ed7a407595ef16582)
- update temporary path [`09e1e02`](https://github.com/ImageMagick/ImageMagick6/commit/09e1e02a7e950ab971082b05c70ffdbcfd56e529)
- read multi-line comments [`09306f8`](https://github.com/ImageMagick/ImageMagick6/commit/09306f8a3d3414c80a78c1dfe5fcafb3e13fbb06)
- cosmetic [`53c1d44`](https://github.com/ImageMagick/ImageMagick6/commit/53c1d449a4902a42c97fdb9f0a87d315ff4037ee)
- cosmetic [`b1181f5`](https://github.com/ImageMagick/ImageMagick6/commit/b1181f580e8a3a5aeafc1455786ac04bb014586d)
- support emedded images [`cca3a2c`](https://github.com/ImageMagick/ImageMagick6/commit/cca3a2cefea4ea38185ffbd0f5f516598c098c1c)
- support alpha mask [`1e67b4a`](https://github.com/ImageMagick/ImageMagick6/commit/1e67b4aa49b0abb0652e91fcffafdcae5b40e237)
- use virtual memory allocator [`4c43301`](https://github.com/ImageMagick/ImageMagick6/commit/4c433014b10e0772cf2a5d9ccdd1686a6eefbdc0)
- eliminate compiler warning [`101d01a`](https://github.com/ImageMagick/ImageMagick6/commit/101d01aa24988b70abe989242ff70ec3eb917381)
- detect math library under C++ [`1a52f3f`](https://github.com/ImageMagick/ImageMagick6/commit/1a52f3f2109503a2782cbc2a7cf178831c6d2e94)
- revert math library check [`4dde2a6`](https://github.com/ImageMagick/ImageMagick6/commit/4dde2a63ff40d6178bcd97b814f3299b50febaf6)
- add missing typecast [`5e2cb79`](https://github.com/ImageMagick/ImageMagick6/commit/5e2cb797a58bc030453d8daf6e30e9afcbb70e20)
- check for insufficient image data [`8fdaad4`](https://github.com/ImageMagick/ImageMagick6/commit/8fdaad484770ff5046dc77545ef54ae78551bfb9)
- initialize locale [`253b113`](https://github.com/ImageMagick/ImageMagick6/commit/253b113c7276208f75f4c7c5f3452d1b7137a6d9)
- include locale header file [`27feb50`](https://github.com/ImageMagick/ImageMagick6/commit/27feb5005fc135cec4d0216cccdf0eb02598dacc)
- latest docs [`d51992f`](https://github.com/ImageMagick/ImageMagick6/commit/d51992f9d58ea2ee4c30cd3e7d448867433afdfb)
- check for underflow [`c4050ee`](https://github.com/ImageMagick/ImageMagick6/commit/c4050ee431c6922be792da0aec214240d2ebbb2a)
- check for underflow [`9428275`](https://github.com/ImageMagick/ImageMagick6/commit/9428275e2e360381ed73fe26549bf53cec3f49ae)
- set initial pixel width/height based in INT_MAX [`fe40221`](https://github.com/ImageMagick/ImageMagick6/commit/fe40221dbd5c5906ab91131a75e70274e0c423be)
- improve exception message [`3b04052`](https://github.com/ImageMagick/ImageMagick6/commit/3b04052a7d99cb93c8dfc914ffc1efd5c5d41e49)
- use TIFF as our intermediate format to minimize distortion [`4f28c4a`](https://github.com/ImageMagick/ImageMagick6/commit/4f28c4a9e6d9cc727656f8cd05d1c38e35d569bd)
- support 10-bit JXR images [`a2ca136`](https://github.com/ImageMagick/ImageMagick6/commit/a2ca136861950cb908eff73103f255f0d4f9eb9e)
- support 10-bit JXR images [`a02bebc`](https://github.com/ImageMagick/ImageMagick6/commit/a02bebc32f93910b5b6015a0cc165cbdba1ecb1c)
- improved a bit [`463f390`](https://github.com/ImageMagick/ImageMagick6/commit/463f39093ebdddb9e003cf79b4d28705161a0996)
- revert [`49444d6`](https://github.com/ImageMagick/ImageMagick6/commit/49444d6263a27f14660076879d2eac705f74065f)
- release [`779b4ec`](https://github.com/ImageMagick/ImageMagick6/commit/779b4ecca12caad7a171861b601730e9ffa6a036)

## [6.9.12-93](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-92...6.9.12-93) - 2023-07-30

### Commits

- beta release [`b913dba`](https://github.com/ImageMagick/ImageMagick6/commit/b913dba39bbb1ee3bf99dca071fcb53c2930c4a3)
- enable entitiy substitution per local parser (https://github.com/ImageMagick/ImageMagick/security/advisories/GHSA-v9p9-6pmh-r6rm) [`803444a`](https://github.com/ImageMagick/ImageMagick6/commit/803444acd3b0c0ca35201a9933fe2a9970b05bd6)
- The -fx option, no long applied twice (https://github.com/ImageMagick/ImageMagick/discussions/6518) [`30e149b`](https://github.com/ImageMagick/ImageMagick6/commit/30e149b6b9799302b34ac25ed20f52f35936997d)
- eliminate possible integer overflow [`d1ec14b`](https://github.com/ImageMagick/ImageMagick6/commit/d1ec14b9abc6d942cb18009e85f78548443094ab)
- post any potential vulnerabilities as a security advisory [`bdb25b9`](https://github.com/ImageMagick/ImageMagick6/commit/bdb25b97dee68b937add3bfe1db16d225aa55503)
- check for valid bits-per-pixel [`246fc38`](https://github.com/ImageMagick/ImageMagick6/commit/246fc3810ae38dcae88ff64a9538a65dd23b9936)
- release [`201ff6d`](https://github.com/ImageMagick/ImageMagick6/commit/201ff6df4d28c0035e5d280c25910afb60593579)

## [6.9.12-92](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-91...6.9.12-92) - 2023-07-22

### Commits

- beta release [`eaef997`](https://github.com/ImageMagick/ImageMagick6/commit/eaef997c19e71231fa20a4066392d56534779253)
- support abbreviations for RTL and LTR text direction [`9bcc50e`](https://github.com/ImageMagick/ImageMagick6/commit/9bcc50e2a4dee3f943aed78eab21a58fc79cf1e8)
- note y_advance, implement top-to-bottom in the future [`6342c58`](https://github.com/ImageMagick/ImageMagick6/commit/6342c585c9425f223cddda0c169cf96a94668ec8)
- prep for top-to-bottom rendering of text [`01dc6b6`](https://github.com/ImageMagick/ImageMagick6/commit/01dc6b6d339039816d004215125508942f90c26f)
- check for possible IPTC overrun [`1ecea5c`](https://github.com/ImageMagick/ImageMagick6/commit/1ecea5c3524af3cef6c5d806861076be67be3f75)
- release [`021f572`](https://github.com/ImageMagick/ImageMagick6/commit/021f572822c980405862bf56ff10d0959b9fef88)

## [6.9.12-91](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-90...6.9.12-91) - 2023-07-16

### Commits

- beta release [`dbc3926`](https://github.com/ImageMagick/ImageMagick6/commit/dbc3926185b9b5481bdfeda2f8e0924f3efd162f)
- heap-buffer-overflow in ImageMagick &lt;= 7.1.1-12, contributed by Hardik shah of Vehere (Dawn Treaders team) [`0d00400`](https://github.com/ImageMagick/ImageMagick6/commit/0d00400727170b0540a355a1bc52787bc7bcdea5)
- correct type of return value for TIFFReadTile and added more checks [`5c03062`](https://github.com/ImageMagick/ImageMagick6/commit/5c0306243f6b5d42951b1312eed4ec4edda9670d)
- memory library with reduced synchronization overhead [`923cfee`](https://github.com/ImageMagick/ImageMagick6/commit/923cfeeab2e5820101fc4d8fe2f20e7174a3f5f6)
- correct declarations [`96526d1`](https://github.com/ImageMagick/ImageMagick6/commit/96526d1bdaf86861de969fae2a1c0a49a6c7a58a)
- cosmetic [`00125d2`](https://github.com/ImageMagick/ImageMagick6/commit/00125d225f1deac3c51f8cb57cdb157e27d1e2ed)
- check for insufficient image data in file [`b9eeb1a`](https://github.com/ImageMagick/ImageMagick6/commit/b9eeb1aa064f1a0587183d336185ea815f0759e9)
- silence unsigned overflow [`76c262f`](https://github.com/ImageMagick/ImageMagick6/commit/76c262f132eeb00c080f555dfd40a22a415a791d)
- https://github.com/ImageMagick/ImageMagick/issues/6476 [`04d7e66`](https://github.com/ImageMagick/ImageMagick6/commit/04d7e669ceebbc7b04ad820446a355e7ceada189)
- preferred unwinding order [`aa47fa5`](https://github.com/ImageMagick/ImageMagick6/commit/aa47fa5c546d8f5023d15e4419c87b24d2eb17ae)
- Change the default devcontainer to a security container. [`068a78c`](https://github.com/ImageMagick/ImageMagick6/commit/068a78ce96890a4d09b9d1f817fd809b08462712)
- Fix Dockerfile. [`a9f0a19`](https://github.com/ImageMagick/ImageMagick6/commit/a9f0a1961fd86512ee824d0bdeabc4915deb1697)
- Corrected paths. [`078be2e`](https://github.com/ImageMagick/ImageMagick6/commit/078be2ef8ec1fec26cd2eda157cf601c0bc530bd)
- Corrected flags and improved Dockerfile. [`cd16a44`](https://github.com/ImageMagick/ImageMagick6/commit/cd16a443b0418a41b5a3611cece12b9d5c7cf6e7)
- Fixed memory leak. [`c90e79b`](https://github.com/ImageMagick/ImageMagick6/commit/c90e79b3b22fec309cab55af2ee606f71b027b12)
- Fixed possible memory leak. [`24a88a9`](https://github.com/ImageMagick/ImageMagick6/commit/24a88a922df011830dde8329825b6ded73209db8)
- release [`3d0f45a`](https://github.com/ImageMagick/ImageMagick6/commit/3d0f45a2af79d483aae3beab9b3be2401064ba5a)

## [6.9.12-90](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-89...6.9.12-90) - 2023-06-25

### Merged

- Fix the max memory request initial value in memory.c and comparison in jpeg.c [`#251`](https://github.com/ImageMagick/ImageMagick6/pull/251)

### Fixed

- Also check image-&gt;exception to resolve #213. [`#213`](https://github.com/ImageMagick/ImageMagick6/issues/213)

### Commits

- beta release [`81042af`](https://github.com/ImageMagick/ImageMagick6/commit/81042afd7ba3f966611afd9911e1256c27835d26)
- default colorspace is xyY and HSB [`f784d2b`](https://github.com/ImageMagick/ImageMagick6/commit/f784d2be2675033e7358ad9d303c1a689390ff0f)
- check geometry boundaries [`fa0461e`](https://github.com/ImageMagick/ImageMagick6/commit/fa0461e2ba87f5977ee6fe0665f8050dd9b27071)
- eliminate uninitalized value [`9385e02`](https://github.com/ImageMagick/ImageMagick6/commit/9385e025cbbac19ad817b40d8a378ce1f423e7d2)
- reject invalid BMP image @ https://github.com/ImageMagick/ImageMagick/issues/6393 [`55cc408`](https://github.com/ImageMagick/ImageMagick6/commit/55cc4083f3728d55251f1f44a9277c39c4044f77)
- support -define ptif:pyramid define [`a9a8770`](https://github.com/ImageMagick/ImageMagick6/commit/a9a87701f1cb8a5fbdd24ce2b67808932589c04b)
- https://github.com/ImageMagick/ImageMagick/discussions/6399 [`9a1713e`](https://github.com/ImageMagick/ImageMagick6/commit/9a1713ea565cc6d2ea8c8c424d3035aa3ed5652e)
- move OMP inside conditional [`e8ec2d8`](https://github.com/ImageMagick/ImageMagick6/commit/e8ec2d86c8c94049e17c32d3ebe6ca1324e047d5)
- fix build issue [`d0fe016`](https://github.com/ImageMagick/ImageMagick6/commit/d0fe016ae708398c339910702872583814888744)
- ... [`9321dd0`](https://github.com/ImageMagick/ImageMagick6/commit/9321dd04436e08a2a4f9efb7de367fb2aacf9f63)
- check the precision of the alpha channel [`2b67c3f`](https://github.com/ImageMagick/ImageMagick6/commit/2b67c3f87d7c55b4a1dd42cc7b317d535ed0a561)
- use the correct macro instead [`06c822f`](https://github.com/ImageMagick/ImageMagick6/commit/06c822fcf3b49974f003ef297ffe48b47423a1b9)
- Turns out we already get the include from studio.h. [`cf7e12f`](https://github.com/ImageMagick/ImageMagick6/commit/cf7e12f447205ad6e2672ac5f69768c0529f9e24)
- Added missing check to test if the blob could be opened. [`708fd6a`](https://github.com/ImageMagick/ImageMagick6/commit/708fd6aa317128f19e440cb467f2271a854e680d)
- release [`d17abf5`](https://github.com/ImageMagick/ImageMagick6/commit/d17abf5099358516b1a1c8175a329559518a2f76)
- release [`f52c160`](https://github.com/ImageMagick/ImageMagick6/commit/f52c16075e8397f81f6cdaa402e387a68e939fcb)

## [6.9.12-89](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-88...6.9.12-89) - 2023-05-29

### Commits

- beta release [`953059b`](https://github.com/ImageMagick/ImageMagick6/commit/953059bfa3cc5ce54776fca0c962fc0038905cde)
- list compression options [`f0d85cb`](https://github.com/ImageMagick/ImageMagick6/commit/f0d85cb32442e27f180ad68b3576c31c5259a5c6)
- cosmetic [`38310e5`](https://github.com/ImageMagick/ImageMagick6/commit/38310e52a6982007bf4c7437ba8c8bc19742c0f0)
- ensure mutex is initialized [`af762be`](https://github.com/ImageMagick/ImageMagick6/commit/af762beb0ff0b3be87c6430ef14defc0afdfec2b)
- cosmetic [`bde668c`](https://github.com/ImageMagick/ImageMagick6/commit/bde668ca709e61d18cb6804022df65db05fbbd16)
- cosmetic [`457e5d8`](https://github.com/ImageMagick/ImageMagick6/commit/457e5d8739fe426ef7c3f0f2cfca2579ca595f74)
- eliminate compiler exception [`3222b97`](https://github.com/ImageMagick/ImageMagick6/commit/3222b978477d12925ceea6bef7c4bc1ec550a19d)
- eliminate compiler exception [`6982a64`](https://github.com/ImageMagick/ImageMagick6/commit/6982a644cb0a467f7bf5894a1c904bbf717a3355)
- make sure count is not equal to zero when reading TIFF fields [`eb20263`](https://github.com/ImageMagick/ImageMagick6/commit/eb202635e1c5aa756a567fc6cc560fdfbe270738)
- check colorspace before setting primaries [`bd040a0`](https://github.com/ImageMagick/ImageMagick6/commit/bd040a0b05612d380834b609092340764431b297)
- eliminate compiler exception [`9331fb3`](https://github.com/ImageMagick/ImageMagick6/commit/9331fb303ea8cf7c8278100d62c4ba598c4be184)
- eliminate compiler warning [`af6e090`](https://github.com/ImageMagick/ImageMagick6/commit/af6e090bafa6ce8fc6eca65b486f7de3746aca19)
- inherit exception (https://github.com/ImageMagick/ImageMagick6/issues/239) [`8018a11`](https://github.com/ImageMagick/ImageMagick6/commit/8018a11bee53ce6737dd863279be67f7d713bb96)
- Cosmetic. [`a130dbc`](https://github.com/ImageMagick/ImageMagick6/commit/a130dbcc4748f818b16f4f16f62ba5174afe6f5d)
- more robust implementation of video decoding/encoding [`8fdb81b`](https://github.com/ImageMagick/ImageMagick6/commit/8fdb81b3c551a37f41a6370fe7d1634406eb1cef)
- prevent possible integer overflow [`044a31a`](https://github.com/ImageMagick/ImageMagick6/commit/044a31ae75b08669c585ad0268d10af71697c281)
- release [`a8cd2a3`](https://github.com/ImageMagick/ImageMagick6/commit/a8cd2a3216ae889b52e26db825ca1bae022bd6d0)

## [6.9.12-88](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-87...6.9.12-88) - 2023-05-21

### Commits

- ... [`c3da0e4`](https://github.com/ImageMagick/ImageMagick6/commit/c3da0e40d175ce9095ead9db1edbf6409bc3b3b7)
- Use same logic as in ImageMagick 7. [`0ca10a1`](https://github.com/ImageMagick/ImageMagick6/commit/0ca10a14ffcab82492708a4499d701afd8dd36a6)
- Mark argument as unused. [`3c16610`](https://github.com/ImageMagick/ImageMagick6/commit/3c166104de810dd1c83febdffd179f05f9c57406)
- possible RCE vulnerability (https://github.com/ImageMagick/ImageMagick/issues/6339) [`58bef03`](https://github.com/ImageMagick/ImageMagick6/commit/58bef0396a04e07aad650d1416af6b4e11da5740)
- properly cast double to size_t (https://github.com/ImageMagick/ImageMagick/issues/6341) [`133089f`](https://github.com/ImageMagick/ImageMagick6/commit/133089f716f23ce0b80d89ccc1fd680960235512)
- Fixed MYS2 build error. [`aa6d348`](https://github.com/ImageMagick/ImageMagick6/commit/aa6d34879f61543a46ff3736e08b61fc0b7d6f73)
- Reverted the patch of https://github.com/ImageMagick/ImageMagick/issues/6339. [`43daec8`](https://github.com/ImageMagick/ImageMagick6/commit/43daec8ed100cd68d4bf257721373a6473456391)
- add caution when enabling pipe support [`2a7b804`](https://github.com/ImageMagick/ImageMagick6/commit/2a7b80480e785626ecaae699eb21b6629a8a3131)
- bump beta version [`ccc6c03`](https://github.com/ImageMagick/ImageMagick6/commit/ccc6c0350cb8181e43cb6dca7176656bac92b707)
- conditional compile [`6fc3046`](https://github.com/ImageMagick/ImageMagick6/commit/6fc3046df7faacefb25f7a238982c62849640416)
- release [`e3e0b52`](https://github.com/ImageMagick/ImageMagick6/commit/e3e0b52cc0790c88525b36bae3f9404b2a11d37f)

## [6.9.12-87](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-86...6.9.12-87) - 2023-05-14

### Commits

- beta release [`f9db3e3`](https://github.com/ImageMagick/ImageMagick6/commit/f9db3e392f69a7c14218296d98dbd016b2892eb8)
- check for stdint.h header file [`ed8b9da`](https://github.com/ImageMagick/ImageMagick6/commit/ed8b9da26070f2a09625859a2d50d3708afc428f)
- get the width of the main channel [`6c3b244`](https://github.com/ImageMagick/ImageMagick6/commit/6c3b2446f77a926ac606df4870b402059a4b8ce5)
- revert [`bc907f8`](https://github.com/ImageMagick/ImageMagick6/commit/bc907f8755faa344db07fbfff4a8fdf1f54bf838)
- sync with IMv7 [`89c4e96`](https://github.com/ImageMagick/ImageMagick6/commit/89c4e963f1ff3d02d61fffd80195664e54d1fd83)
- log gamma [`80accea`](https://github.com/ImageMagick/ImageMagick6/commit/80acceae72c965af44f60f17df84f0d5c1fd4bbd)
- don't default grayscale to paletted for PNG (https://github.com/ImageMagick/ImageMagick/issues/6314) [`5535e1e`](https://github.com/ImageMagick/ImageMagick6/commit/5535e1ed8ecde5ca013ed042d3c311ed5d49e261)
- release [`53fdc5d`](https://github.com/ImageMagick/ImageMagick6/commit/53fdc5d388180492ea8bd5b5ff013e414354db18)

## [6.9.12-86](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-85...6.9.12-86) - 2023-04-22

### Commits

- beta release [`d056e7d`](https://github.com/ImageMagick/ImageMagick6/commit/d056e7de327c4a64fe257bb1dda182c37ea63366)
- Added checks to make sure all bytes were read. [`fa048a3`](https://github.com/ImageMagick/ImageMagick6/commit/fa048a347a447d075e3904214dcce80c781a496a)
- correct divisor [`55c5bfb`](https://github.com/ImageMagick/ImageMagick6/commit/55c5bfbb06d7e4cca3dde9440fa4291dfe4be3de)
- validate pixel offset [`24ed664`](https://github.com/ImageMagick/ImageMagick6/commit/24ed66478cfa009d62032934d562764ff02d76e1)
- release [`984daa2`](https://github.com/ImageMagick/ImageMagick6/commit/984daa26d4a022697d402b0f8aa58ab32453d745)

## [6.9.12-85](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-84...6.9.12-85) - 2023-04-16

### Commits

- beta release [`62d65ad`](https://github.com/ImageMagick/ImageMagick6/commit/62d65ad5a8fab580a94d58c2b3805bd11972d2d4)
- Minor refactoring. [`90d7179`](https://github.com/ImageMagick/ImageMagick6/commit/90d71793fb763b02bf1a5162442d554d897e442f)
- account for extra samples [`7e4c992`](https://github.com/ImageMagick/ImageMagick6/commit/7e4c992f148afc5b28111e540921d5b6e4e38673)
- The quantum extent should also including the pad. [`2da5520`](https://github.com/ImageMagick/ImageMagick6/commit/2da5520c7df36e719ff853ff76b2991b8fc9f46f)
- Another improvement of calculating the size of the extent. [`49ccd7e`](https://github.com/ImageMagick/ImageMagick6/commit/49ccd7e62309dea3304a0c7ca200794e727502a2)
- The padding is per pixel. [`e9f4c76`](https://github.com/ImageMagick/ImageMagick6/commit/e9f4c76a133e5342b8c43913d2117c5a6a2833b5)
- use the new API when available [`1cd456a`](https://github.com/ImageMagick/ImageMagick6/commit/1cd456a8b6dc64919aaa35745afced137208d821)
- don't cut off letters (https://github.com/ImageMagick/ImageMagick/issues/6221) [`e7ce537`](https://github.com/ImageMagick/ImageMagick6/commit/e7ce5376beafcbade74481d9dbc9bd62e7f2296c)
- theoretically a more intuitive brighness contrast algorithm (https://github.com/ImageMagick/ImageMagick/issues/6079) [`c9bf349`](https://github.com/ImageMagick/ImageMagick6/commit/c9bf349c313aa5529d77ccaa1434b2cfd0c64ed3)
- revert format hint (https://github.com/ImageMagick/ImageMagick/issues/6242) [`299fd34`](https://github.com/ImageMagick/ImageMagick6/commit/299fd3478d6538b42d402374e4e2add5994e4bea)
- identify correct format [`d31945e`](https://github.com/ImageMagick/ImageMagick6/commit/d31945e81f9c7ea6569e936f41a375a693064f47)
- revert [`3c24f8c`](https://github.com/ImageMagick/ImageMagick6/commit/3c24f8cead9ba0b7679bbf38cbd515fded23ba51)
- eliminate black outline when clipping (https://github.com/ImageMagick/ImageMagick/discussions/6226) [`222b2e2`](https://github.com/ImageMagick/ImageMagick6/commit/222b2e2c264013a0217f4505039f0f606cde868c)
- correct slope/intercept [`3f338bf`](https://github.com/ImageMagick/ImageMagick6/commit/3f338bf4b64275bb527fac86eb592b7c198e4911)
- correct intercept [`3afc67e`](https://github.com/ImageMagick/ImageMagick6/commit/3afc67e742807fa80c37f7989eccc9c90408bfa7)
- eliminate compiler warnings [`96b27b4`](https://github.com/ImageMagick/ImageMagick6/commit/96b27b47cff7f2327d25cc79881d4e92b038c405)
- eliminate compiler warnings [`9c10890`](https://github.com/ImageMagick/ImageMagick6/commit/9c108901453f4ab38692cbbaf66b36e2d6305614)
- release [`4814167`](https://github.com/ImageMagick/ImageMagick6/commit/4814167fd6cb5dcb08f28dd42ddc20dc9882e777)
- release [`1938c61`](https://github.com/ImageMagick/ImageMagick6/commit/1938c614af6aa3ef9da6e8a8b1cd9cdd6f4e4c8c)
- beta release [`93016da`](https://github.com/ImageMagick/ImageMagick6/commit/93016da12e738b82f1405ca89a39845c1dfa81b2)
- if the image type is explicit, use the file extension if possible (https://github.com/ImageMagick/ImageMagick/issues/6242) [`cc11b8b`](https://github.com/ImageMagick/ImageMagick6/commit/cc11b8baba2ddfe4563a6acc6ee87fc327080c6a)
- Corrected implementation of NTRegistryKeyLookup (#204). [`39f6601`](https://github.com/ImageMagick/ImageMagick6/commit/39f66010d2f122ce9aff725b0633c1519394a735)
- add additional checks for casting double to size_t [`ca4b4c6`](https://github.com/ImageMagick/ImageMagick6/commit/ca4b4c6d3471ad2d19ccdf12a7380f0628e3ce77)
- eliminate compiler warnings [`3d18ead`](https://github.com/ImageMagick/ImageMagick6/commit/3d18ead196f19ba71c78080bcae1b9f41aa387c9)
- identify z component of chromaticity [`ba3c9fb`](https://github.com/ImageMagick/ImageMagick6/commit/ba3c9fb3d22fe0eed29a89cd8e72fbafd4cff444)
- Refactor code to make it more readable. [`132deb9`](https://github.com/ImageMagick/ImageMagick6/commit/132deb9175c6dd09b6753789a876eaf695d3e688)
- Also skip writing the exif/tiff resolution properties when the pHYs chunk is written. [`b5b3c7c`](https://github.com/ImageMagick/ImageMagick6/commit/b5b3c7c77d83977b54c966dbccc0ac0730f08f94)
- improved range checking [`0b8553c`](https://github.com/ImageMagick/ImageMagick6/commit/0b8553cd2042438dde215c7e8cd21e1d7307f813)
- Fixed various build errors. [`da8c0b2`](https://github.com/ImageMagick/ImageMagick6/commit/da8c0b219c5fcec572613e85489bac227dcb59fe)
- eliminate compiler exception [`6d61aca`](https://github.com/ImageMagick/ImageMagick6/commit/6d61acac835ba52ecb8d40f7f04f82226a3cacaf)
- separate raqm from complete text layout [`d60b32f`](https://github.com/ImageMagick/ImageMagick6/commit/d60b32fb82fdd59f92df484a7482636688943272)
- eliminate compiler exception [`e93132a`](https://github.com/ImageMagick/ImageMagick6/commit/e93132a43794fc937545b609fcf48c7e3c04a5fd)
- detect presence of alpha channel [`d49d6b2`](https://github.com/ImageMagick/ImageMagick6/commit/d49d6b227a128aa0f9b4b0f2e2c697d44ac6dc65)
- Fixed build. [`e59f2b3`](https://github.com/ImageMagick/ImageMagick6/commit/e59f2b3d07330357774dd86ef46e79cbe2afeaae)
- round crop width properly [`3a5e31d`](https://github.com/ImageMagick/ImageMagick6/commit/3a5e31d8906183ce74486456dda4f9eb8e0da4d0)
- release [`b73b185`](https://github.com/ImageMagick/ImageMagick6/commit/b73b18581307485066dbe58861f211422b2c3223)

## [6.9.12-84](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-83...6.9.12-84) - 2023-04-02

### Commits

- beta release [`519f510`](https://github.com/ImageMagick/ImageMagick6/commit/519f510150994c6890c360463f0fff4ff945009b)
- Use const string instead. [`2fb1217`](https://github.com/ImageMagick/ImageMagick6/commit/2fb1217ae670a0cc764c1a173deacfb837a3369e)
- conditional colormap [`f7d35d8`](https://github.com/ImageMagick/ImageMagick6/commit/f7d35d8ae56d7b7ea8eb70567c4fbff35839f72f)
- Enabled OpenMP in the portable build. [`b76a842`](https://github.com/ImageMagick/ImageMagick6/commit/b76a8421ac5472c488225d530947299324a32b23)
- enable near-lossless compression quality (https://github.com/ImageMagick/ImageMagick/discussions/6204) [`a0bd172`](https://github.com/ImageMagick/ImageMagick6/commit/a0bd1722c7e79c81b68418cafed904df673c3f34)
- uniform copyright [`a767442`](https://github.com/ImageMagick/ImageMagick6/commit/a76744230cb2b74a8d7b1a087fbb34b7ff75e680)
- sharper [`6ee3010`](https://github.com/ImageMagick/ImageMagick6/commit/6ee3010e880f7f7031d1c50188fc9addc1cf9e4e)
- Only write WriteResolutionResourceBlock when dpi is set. [`d95f105`](https://github.com/ImageMagick/ImageMagick6/commit/d95f105ff4b3cd86b887c49b943a8f99a134f7cc)
- Corrected length. [`371a75d`](https://github.com/ImageMagick/ImageMagick6/commit/371a75d3a3768813d441d03eb677100573de6858)
- possible heap buffer overflow (https://github.com/ImageMagick/ImageMagick/security/advisories/GHSA-35q2-86c7-9247) [`e30c693`](https://github.com/ImageMagick/ImageMagick6/commit/e30c693b37c3b41723f1469d1226a2c814ca443d)
- cosmetic [`499b59d`](https://github.com/ImageMagick/ImageMagick6/commit/499b59d046ed7860a813ef1fa6fa78ebc10952e7)
- multiply strip size by # of samples [`b5c7565`](https://github.com/ImageMagick/ImageMagick6/commit/b5c7565f3a3aa5a50be4067b1388cbb5d1ea2800)
- release [`0731a37`](https://github.com/ImageMagick/ImageMagick6/commit/0731a3791fc3e270abf8b9209e2402a30518db04)

## [6.9.12-83](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-82...6.9.12-83) - 2023-03-26

### Commits

- beta release [`58beb73`](https://github.com/ImageMagick/ImageMagick6/commit/58beb7316569f896aaa1418e7419bc80412b3eef)
- offset to x1 for west gravity (#https://github.com/ImageMagick/ImageMagick/issues/6163) [`1211145`](https://github.com/ImageMagick/ImageMagick6/commit/121114551d92842679868e069853ce5f6255c0d3)
- optimization [`c2a9773`](https://github.com/ImageMagick/ImageMagick6/commit/c2a977370e4ee5b47cbdb9802ab723689de24568)
- MVG must be explicit [`aeb1e5e`](https://github.com/ImageMagick/ImageMagick6/commit/aeb1e5e73dc72980ee24d36e78837d29ab5f58b6)
- enable left bearing offset for undefined and west gravities [`a6cec4f`](https://github.com/ImageMagick/ImageMagick6/commit/a6cec4f034aa6192e0cf5626f979ce0ebe089594)
- eliminate memory leak when writing the JPS image format [`89c4b1f`](https://github.com/ImageMagick/ImageMagick6/commit/89c4b1f454b71a12c0155c31a6841572fdcd8d6b)
- release [`7406afe`](https://github.com/ImageMagick/ImageMagick6/commit/7406afeefdc94c77ebf497b7f5453a21af315d87)
- fix compiler exception [`6569223`](https://github.com/ImageMagick/ImageMagick6/commit/65692230ba98b5735b911565682010afc67c769f)
- module is a reserved work in C++ (20) [`49c6579`](https://github.com/ImageMagick/ImageMagick6/commit/49c6579c87acfc8630471c6f5abe6117e015d42a)
- release [`5036aa9`](https://github.com/ImageMagick/ImageMagick6/commit/5036aa9ebbe83e3b6f0402e9f3a66c70126c8655)

## [6.9.12-82](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-81...6.9.12-82) - 2023-03-18

### Commits

- beta release [`708c453`](https://github.com/ImageMagick/ImageMagick6/commit/708c453fd0dbb4c181f16088972273c42d7c62a0)
- improve default fatal exception handler [`e8e4389`](https://github.com/ImageMagick/ImageMagick6/commit/e8e43891405b8a54df9cd61ed1e4f5d0bb0be063)
- improve locale exception handling [`1a76965`](https://github.com/ImageMagick/ImageMagick6/commit/1a76965aaf6fd8b2547b7760e2cb0bc61281f3f6)
- terminate loop on page sentinel (#https://github.com/ImageMagick/ImageMagick/issues/6158) [`15c5b01`](https://github.com/ImageMagick/ImageMagick6/commit/15c5b01124557ccca9a619bd435d91ecd73659d3)
- optimization [`ee78ae5`](https://github.com/ImageMagick/ImageMagick6/commit/ee78ae5faaed4636d9ade7f9f0f2f7854bc422a3)
- Update SECURITY.md [`7c881de`](https://github.com/ImageMagick/ImageMagick6/commit/7c881de3dae99f88ae74a4ec85de135190326cbb)
- call SetUnhandledExceptionFilter() in utilities rather than the MagickCore API [`11ceaf0`](https://github.com/ImageMagick/ImageMagick6/commit/11ceaf053ea65a1d2846c7fddafc25c16ce9618d)
- Fixed build. [`9df4c7f`](https://github.com/ImageMagick/ImageMagick6/commit/9df4c7f3ebc68ab81cdc28018cd636e5d06a7990)
- accomodate UTF-8 image file names [`ab93a0b`](https://github.com/ImageMagick/ImageMagick6/commit/ab93a0bb8015b91ef5b51880393b119c534bcc98)
- Newer versions of libtiff require the field_name to be set so we set it to a static dummy string. [`440b988`](https://github.com/ImageMagick/ImageMagick6/commit/440b9882e0e6bcd547942fa4410871f83fb0c51b)
- Removed const. [`5bad64f`](https://github.com/ImageMagick/ImageMagick6/commit/5bad64f99a9ad7ffd34cdf7e962eea37c01a823f)
- beta release [`e389f90`](https://github.com/ImageMagick/ImageMagick6/commit/e389f90499e309cd9051aafab1e5982018050f09)
- release [`04a0e3a`](https://github.com/ImageMagick/ImageMagick6/commit/04a0e3ad18967440c5e4f73e5bda3f867af9c274)

## [6.9.12-81](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-80...6.9.12-81) - 2023-03-11

### Commits

- beta release [`fd996c6`](https://github.com/ImageMagick/ImageMagick6/commit/fd996c61bc7213535026e61aced30205d3554618)
- MagickWandTerminus calls MagickCoreTermines so we don't need to call both of them. [`0cc37c4`](https://github.com/ImageMagick/ImageMagick6/commit/0cc37c450953b3305413da4ae32f9d6cd4d4d6c8)
- Call MagickWandTerminus instead of MagickCoreTerminus. [`42c64e1`](https://github.com/ImageMagick/ImageMagick6/commit/42c64e12221fa19cf07eb31e4b1c47a7dfc95a85)
- release [`6d2ffaf`](https://github.com/ImageMagick/ImageMagick6/commit/6d2ffaff5a03e11c30026f4b7782d6de2666eaad)

## [6.9.12-80](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-79...6.9.12-80) - 2023-03-09

### Commits

- release [`6614dfa`](https://github.com/ImageMagick/ImageMagick6/commit/6614dfa0002158a40bacd9887a5089fd7fedcb06)
- release [`037e2db`](https://github.com/ImageMagick/ImageMagick6/commit/037e2dbc7bb241bb19b48b776eb5760680e42605)

## [6.9.12-79](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-78...6.9.12-79) - 2023-03-09

### Commits

- beta release [`b396ff0`](https://github.com/ImageMagick/ImageMagick6/commit/b396ff0282ed5fefb55a675b63c5d48fa448d83f)
- PNG compression filters range from 0-5 [`7b955d7`](https://github.com/ImageMagick/ImageMagick6/commit/7b955d7c4d5ef8d1081b9297d7dba57a27330682)
- release [`0ed4c1c`](https://github.com/ImageMagick/ImageMagick6/commit/0ed4c1c48d84842d2ba044e602d292702ad4b9ac)

## [6.9.12-78](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-77...6.9.12-78) - 2023-03-08

### Commits

- beta release [`59eb784`](https://github.com/ImageMagick/ImageMagick6/commit/59eb78450cfa6374a1f2f0b3387ab5b41d045a43)
- correct RLE unpack algorithm [`26bf171`](https://github.com/ImageMagick/ImageMagick6/commit/26bf1714ca6bd9013ae5d71a6ab477f0b26b579b)
- Fixed build. [`39145b7`](https://github.com/ImageMagick/ImageMagick6/commit/39145b7b8211d9291b5cdf01a199afc18b21200a)
- properly detect an extra samples alpha channel (https://github.com/ImageMagick/ImageMagick/issues/6058) [`9cf9fe2`](https://github.com/ImageMagick/ImageMagick6/commit/9cf9fe2c66666473e44c11ebdc83931b3b5c3ae2)
- Added missing check to prevent a possible segfault. [`1c44066`](https://github.com/ImageMagick/ImageMagick6/commit/1c44066017868f415cb199c61faf431cc7b2cc9f)
- detect RLE error [`6d66808`](https://github.com/ImageMagick/ImageMagick6/commit/6d668080271196b27359152618438a596fb91740)
- ... [`74e06a8`](https://github.com/ImageMagick/ImageMagick6/commit/74e06a878d297644ea7d46f25275d8c7debabaa7)
- check for negative LUT lookup (https://github.com/ImageMagick/ImageMagick/issues/6070) [`f560fc2`](https://github.com/ImageMagick/ImageMagick6/commit/f560fc2444497f62c9b50cf6314f31fd148b381e)
- Fixed build. [`723af4c`](https://github.com/ImageMagick/ImageMagick6/commit/723af4c3711c6ee37e35a6bf120505de03fc4ddd)
- set font with MAGICK_FONT environment variable [`382281f`](https://github.com/ImageMagick/ImageMagick6/commit/382281f68c6a84f910b3ad8b75dd42743ce3109f)
- valid compression filters are 0 through 9 (https://github.com/ImageMagick/ImageMagick/discussions/6108) [`08e6df4`](https://github.com/ImageMagick/ImageMagick6/commit/08e6df458745bbbb4d256d224546a4738b56a4cb)
- site: fix typo for compare [`a766b33`](https://github.com/ImageMagick/ImageMagick6/commit/a766b33654bdeee510d7392c9dd2b3413ec514cb)
- clone latest documentation [`86a0542`](https://github.com/ImageMagick/ImageMagick6/commit/86a05422d9cce5d3bb66bc8a637a55f246fc8097)
- identify a default font [`8a9176a`](https://github.com/ImageMagick/ImageMagick6/commit/8a9176a52edf81e3f5f197e2ddfb0cc682c9039b)
- Also include optional libraries, incompatible licenses and deprecated code in the daily Windows build. [`1d4c95c`](https://github.com/ImageMagick/ImageMagick6/commit/1d4c95c5a7e7d244b072720645c72c2a77b1ae9b)
- do not permit MVG coder from rendering SVG/MSVG images [`9f0cd40`](https://github.com/ImageMagick/ImageMagick6/commit/9f0cd40be253b6c4b189d9853c3c7eae811a8f6b)
- recursion detection [`75b9ede`](https://github.com/ImageMagick/ImageMagick6/commit/75b9ede7874c50ecb2fc3aa1de29bc769c2e8d31)
- recursion detection framework [`e8c0090`](https://github.com/ImageMagick/ImageMagick6/commit/e8c0090c6d2df7b1553053dca2008e96724204bf)
- recursion detection framework [`060660b`](https://github.com/ImageMagick/ImageMagick6/commit/060660bf45e0771cf0431e5c2749aa51fabf23f8)
- recursion detection [`706d381`](https://github.com/ImageMagick/ImageMagick6/commit/706d381b7eb79927d328c96f7b7faab5dc109368)
- Restore the missing bracket. [`999ee5b`](https://github.com/ImageMagick/ImageMagick6/commit/999ee5b556cf51e8dc84a2fa9b318241c9a6b081)
- recursion detection fail [`1485a4c`](https://github.com/ImageMagick/ImageMagick6/commit/1485a4c2cba8ca32981016fa25e7a15ef84f06f6)
- do not composite SVG to avoid possible recursion [`75aac79`](https://github.com/ImageMagick/ImageMagick6/commit/75aac79108af0c0b0d7fc88b1f09c340b0d62c85)
- release [`41c2222`](https://github.com/ImageMagick/ImageMagick6/commit/41c22229c74587ed0c3c1a74c699b7653959936f)

## [6.9.12-77](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-76...6.9.12-77) - 2023-02-12

### Commits

- beta release [`32913d3`](https://github.com/ImageMagick/ImageMagick6/commit/32913d3aa5c48e13ca703d5e182f0b7413f933a4)
- beta release [`e92bf1a`](https://github.com/ImageMagick/ImageMagick6/commit/e92bf1a83a36eb207465a237d9508138f0423606)
- support filenames with embedded characters (https://github.com/ImageMagick/ImageMagick/issues/6040) [`a39d02e`](https://github.com/ImageMagick/ImageMagick6/commit/a39d02ef700e60419dfdbbc5a0c29cc39184a5e8)
- typecast to unsigned short [`0dd906a`](https://github.com/ImageMagick/ImageMagick6/commit/0dd906a6938bc6e1d1947463cf830d9919c3ffe2)
- cast from char to short [`3bec9a5`](https://github.com/ImageMagick/ImageMagick6/commit/3bec9a592a8c57663e7e48cc1c954b6226cdc7ca)
- Fix EOI marker detection for Exif [`7b7082d`](https://github.com/ImageMagick/ImageMagick6/commit/7b7082d077211e598c3d8bd5725ccbe4673c3fff)
- improve bounds checking [`c8ab721`](https://github.com/ImageMagick/ImageMagick6/commit/c8ab721897b2dbe11ee9643d87ca57091dd04ac4)
- handle undefined EXIF tag (https://github.com/ImageMagick/ImageMagick/issues/6052) [`0f94c92`](https://github.com/ImageMagick/ImageMagick6/commit/0f94c925ca485817229baac754c1f28920fd1d67)
- eliminate compiler warnings [`c8a10ad`](https://github.com/ImageMagick/ImageMagick6/commit/c8a10adfe864fe26164b1490fef34681ef87a32f)
- release [`d863170`](https://github.com/ImageMagick/ImageMagick6/commit/d8631703f925b5ecba4f7735b82c2395292fd1cc)

## [6.9.12-76](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-75...6.9.12-76) - 2023-02-05

### Commits

- beta release [`59c25fd`](https://github.com/ImageMagick/ImageMagick6/commit/59c25fdc011a9ba3c79dd6cb9f42556816e86992)
- fix copyright [`710511f`](https://github.com/ImageMagick/ImageMagick6/commit/710511ff1dda1e2b21dc130114b277be6a4d4e58)
- Corrected the seek implementation (https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=55325). [`21a1784`](https://github.com/ImageMagick/ImageMagick6/commit/21a1784826beff8ab15fe67ca1c7c9fdb062ae1a)
- add support for -list pagesize [`924e07d`](https://github.com/ImageMagick/ImageMagick6/commit/924e07dd1e8b05f617cd3232f600085f54a93cf9)
- Disable LOSSLESS_SUPPORTED checks for libjpeg turbo because they break with their latest code. [`35e05cb`](https://github.com/ImageMagick/ImageMagick6/commit/35e05cb79aabc110c2579643972f8228b1fdd6e4)
- disable setting profile:&lt;filename&gt; property as it is a security risk [`222845f`](https://github.com/ImageMagick/ImageMagick6/commit/222845f6a0848c1e1c567bb1618617e786523bb2)
- eliminate compiler warning [`87d719c`](https://github.com/ImageMagick/ImageMagick6/commit/87d719c194cc9356cdcf5df578bbea25582a290c)
- revert [`23bf431`](https://github.com/ImageMagick/ImageMagick6/commit/23bf43133d5fc525afafdc47398cd92b3b68797d)
- move `-set profile` handler to CLI [`d77c01e`](https://github.com/ImageMagick/ImageMagick6/commit/d77c01e560e973177feed4915ffd7dd1a45fd763)
- add a null byte to the iTXt chunk [`c0c2725`](https://github.com/ImageMagick/ImageMagick6/commit/c0c27250d486b4b0e3bb4f3a6e4229c114477e09)
- support GIMP 2.10+ image files [`a06cfd9`](https://github.com/ImageMagick/ImageMagick6/commit/a06cfd9676f0f7a73df2a29c4d2dfa0f7db0b2fd)
- enforce path-policy when convert a file to a string [`0396815`](https://github.com/ImageMagick/ImageMagick6/commit/0396815fa661d4b98fbb5060b253ae0000aa3e45)
- eliminate compiler warning [`48b46bc`](https://github.com/ImageMagick/ImageMagick6/commit/48b46bc91301b7206bfd4126a459984bd6abe3d4)
- Whitespace. [`86b2f4d`](https://github.com/ImageMagick/ImageMagick6/commit/86b2f4d1de4b6560df37253d1156fcdf3dc8567c)
- remove redundant path policy check [`591e29f`](https://github.com/ImageMagick/ImageMagick6/commit/591e29f0d4c30691c600089bf43249807ec1307b)
- revert [`1c5c8e9`](https://github.com/ImageMagick/ImageMagick6/commit/1c5c8e9a112f6903723f3e436dab14e32ef32abf)
- cosmetic [`3ad2466`](https://github.com/ImageMagick/ImageMagick6/commit/3ad24669727e0bf8bdbbfec429edc66d577db3d4)
- allow SI units with --with-cache configure option [`c987faa`](https://github.com/ImageMagick/ImageMagick6/commit/c987faace29320238d93279d476fafbec60ced96)
- latest automake updates [`016a68d`](https://github.com/ImageMagick/ImageMagick6/commit/016a68da5342ad4b910d9193b2e10a4d8bd5d806)
- latest automake updates [`c508528`](https://github.com/ImageMagick/ImageMagick6/commit/c50852840364b90e4b63da6aab35aa7b82f40bc2)
- eliminate unterminated macro [`b7c7b85`](https://github.com/ImageMagick/ImageMagick6/commit/b7c7b859c579d9c3815ab2fdf2b71a68b066c795)
- cosmetic [`9ea1450`](https://github.com/ImageMagick/ImageMagick6/commit/9ea1450f5210a17f9ae3b24707e08a06ff989ebd)
- Don't use container when creating ChangeLog.md [`465cec6`](https://github.com/ImageMagick/ImageMagick6/commit/465cec6177d7fe7d06c288cfce3524c0cc68f70c)
- improve decompression errors [`1024e92`](https://github.com/ImageMagick/ImageMagick6/commit/1024e92fc5c48734084b01cbf555ffdfb90825ee)
- release [`d67214a`](https://github.com/ImageMagick/ImageMagick6/commit/d67214a9972bba4b3fc9df5ffbd1a481919bd8da)

## [6.9.12-75](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-74...6.9.12-75) - 2023-01-29

### Commits

- beta release [`378756d`](https://github.com/ImageMagick/ImageMagick6/commit/378756d8fe0e18ff62c42c223e0d4f5e17df096b)
- Corrected typo and use if instead of if defined. [`fd5a305`](https://github.com/ImageMagick/ImageMagick6/commit/fd5a3057668145de0ce62a9ffb12ce83cad093b8)
- release [`e4db044`](https://github.com/ImageMagick/ImageMagick6/commit/e4db044175389d6ca37249a1891f3d7b726a895c)

## [6.9.12-74](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-73...6.9.12-74) - 2023-01-28

### Commits

- beta release [`a3b0625`](https://github.com/ImageMagick/ImageMagick6/commit/a3b062524ed5cb8af12c116f7acb3b3d998c469b)
- initialize RLE pixels [`5693f20`](https://github.com/ImageMagick/ImageMagick6/commit/5693f20ad4b486a5c7ea4bf8a77e5049dfbc2c24)
- Replace tabs with spaces. [`a364a0e`](https://github.com/ImageMagick/ImageMagick6/commit/a364a0ed8f7ad4ad4a7e6fcad4330822c81e8ec6)
- wrong byte order [`f0c64eb`](https://github.com/ImageMagick/ImageMagick6/commit/f0c64ebc77b7b13b00788cc7fb7d7e803d18c83a)
- only support WPG postscript embedded images [`3ef877f`](https://github.com/ImageMagick/ImageMagick6/commit/3ef877f78c3f3e868707987b8575c36d0e4f18cf)
- SETJMP_IS_THREAD_SAFE symbol requires namespace prefix (https://github.com/ImageMagick/ImageMagick/discussions/4123) [`2d0250e`](https://github.com/ImageMagick/ImageMagick6/commit/2d0250ef8a245d36d40cab68d24d77e430f7d1d1)
- add MAGICKCORE prefix [`9a920f0`](https://github.com/ImageMagick/ImageMagick6/commit/9a920f024c185d185583d78a50b48a9506a6ba04)
- add MAGICKCORE namespace prefix [`a29febc`](https://github.com/ImageMagick/ImageMagick6/commit/a29febc2278cb4f1a0ebaaf7b9a58b9be70deef4)
- remedy uninitialized value [`bdb8819`](https://github.com/ImageMagick/ImageMagick6/commit/bdb8819aabc33844ae041a0237bbb262f0279df4)
- permit setting colormap with empty pixel cache [`25d201d`](https://github.com/ImageMagick/ImageMagick6/commit/25d201d1320acd67b865fe0e6c181bdd3a9c6831)
- ensure code will compile with an ANSI-C compiler [`2c240b7`](https://github.com/ImageMagick/ImageMagick6/commit/2c240b7ab30f18f9a304ebcd63af07dd521c7458)
- cosmetic [`97db7a5`](https://github.com/ImageMagick/ImageMagick6/commit/97db7a57fef21408361134c525d12d853b7c07a9)
- improve support for PNG iTXt chunk [`3fa447f`](https://github.com/ImageMagick/ImageMagick6/commit/3fa447f9477a2bea8ae5b4ab0d918d35d88d0fb9)
- release [`3d0dc00`](https://github.com/ImageMagick/ImageMagick6/commit/3d0dc0054a0aaff48e77f095de1bc8b60f4656e4)
- Delay release. [`342d607`](https://github.com/ImageMagick/ImageMagick6/commit/342d607f8edd6626e915bfb592562f8e19185fcc)
- Corrected check for define. [`5c8a089`](https://github.com/ImageMagick/ImageMagick6/commit/5c8a0897527ef6eea64ec33b70e5401cf4b56c10)
- release [`cff0e48`](https://github.com/ImageMagick/ImageMagick6/commit/cff0e48a0562a05ded12c223a2b28898cc14ba92)
- release [`ee22c0a`](https://github.com/ImageMagick/ImageMagick6/commit/ee22c0a35e3a499170a53fef9daa7da35c21532a)
- update image signatures [`6e140de`](https://github.com/ImageMagick/ImageMagick6/commit/6e140de3dfaf1c88ad7ea0670c3ba87091d57a35)
- release [`4509b35`](https://github.com/ImageMagick/ImageMagick6/commit/4509b35bb1a692425e5d80da61760e0a09cc2a75)

## [6.9.12-73](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-72...6.9.12-73) - 2023-01-22

### Commits

- beta release [`4836de6`](https://github.com/ImageMagick/ImageMagick6/commit/4836de6c3167320fba188ee4594baafd41e624ff)
- beta release [`64085e4`](https://github.com/ImageMagick/ImageMagick6/commit/64085e4f58cf6cf9d2cc88cc00da9d7ccbac7ed0)
- cosmetic [`a502d4e`](https://github.com/ImageMagick/ImageMagick6/commit/a502d4e612fa7fd9fadc59a73058daabd572a9d5)
- eliminate uninitialised value (https://github.com/ImageMagick/ImageMagick/issues/5916) [`d826ae6`](https://github.com/ImageMagick/ImageMagick6/commit/d826ae64d336d30c0d2c0035e7ee924a719f6547)
- set image background color [`1081508`](https://github.com/ImageMagick/ImageMagick6/commit/10815081ba9d8b0dab3d1fd69c4d3f6adbc8d2f7)
- use define rather than constant [`ba8c549`](https://github.com/ImageMagick/ImageMagick6/commit/ba8c549478de97244ee0231b184a69e6044cc742)
- DCX limited to 1024 frames [`8e9ce89`](https://github.com/ImageMagick/ImageMagick6/commit/8e9ce896d2dd69af514e53cf49b593d0129ff71a)
- bounds check [`a66ac92`](https://github.com/ImageMagick/ImageMagick6/commit/a66ac922a1bbcbcd3971a1636e1912da163d14c4)
- initialize resolution [`7a03db5`](https://github.com/ImageMagick/ImageMagick6/commit/7a03db54319fc53ee4df3718703d948da6607d39)
- use define [`7f4dd8c`](https://github.com/ImageMagick/ImageMagick6/commit/7f4dd8c1cdf8cda38839b5a2d40589ae3e918c20)
- https://github.com/ImageMagick/ImageMagick/pull/5929 [`62f7e61`](https://github.com/ImageMagick/ImageMagick6/commit/62f7e61855f604cd4e176e08947e8716e523ac3e)
- Disable call to -coalesce inside the webp encoder to avoid duplicate coalescing [`7438dc4`](https://github.com/ImageMagick/ImageMagick6/commit/7438dc4eb774c08e227fbca46529eca72986b4ef)
- clone image list, leave coalescing to the user [`b4a43f2`](https://github.com/ImageMagick/ImageMagick6/commit/b4a43f2022c5f847ed53bbbe1403f81295fa082c)
- ignore .Z extention [`a08aeb3`](https://github.com/ImageMagick/ImageMagick6/commit/a08aeb322fd403538eee343a48271783b90dd6fc)
- read blob byte rather than short [`4f38788`](https://github.com/ImageMagick/ImageMagick6/commit/4f38788c5a5455f49ba95e89d92ef24246cfdb37)
- restore image file is there is an exception when reading (https://github.com/ImageMagick/ImageMagick/issues/5952) [`987dcdf`](https://github.com/ImageMagick/ImageMagick6/commit/987dcdf258a35a4b1f5d75918f8874685d6ce2f0)
- eliminate rare memory leak [`cb765ff`](https://github.com/ImageMagick/ImageMagick6/commit/cb765ff97640312eb2bbac9cf8a8add46a392aa8)
- cosmetic [`191d1c0`](https://github.com/ImageMagick/ImageMagick6/commit/191d1c0b9494cae0deed60d086da1d4a7a6bd39a)
- 1-bit images should be colormapped [`8679e6d`](https://github.com/ImageMagick/ImageMagick6/commit/8679e6d5fb7955f9ce2bb7e0977cca9319bcdd84)
- set SetImageOption() for -family option [`56f41a6`](https://github.com/ImageMagick/ImageMagick6/commit/56f41a63bc2de3b71fa6474b138009f88cfef2cb)
- save image orientiation [`ebbbe8e`](https://github.com/ImageMagick/ImageMagick6/commit/ebbbe8eedb40e313133430aca79fa6e211964498)
- Use xlink:href instead of href as suggested by snibgo. [`1439ece`](https://github.com/ImageMagick/ImageMagick6/commit/1439ecec80988aec46c5b3236104694d1ca333ad)
- cosmetic [`6a46672`](https://github.com/ImageMagick/ImageMagick6/commit/6a4667233d11c199b48fecef7788001853e52478)
- missing adjoin flag [`079f7a4`](https://github.com/ImageMagick/ImageMagick6/commit/079f7a44da2f5eb80afeb0e85f4482441ae90630)
- improve BMP error checking (https://github.com/ImageMagick/ImageMagick/issues/5980) [`6b1daae`](https://github.com/ImageMagick/ImageMagick6/commit/6b1daaeb7f79a4cde427289812b4e66cfbd1232b)
- support tga:perserve-orientation option [`ed771d3`](https://github.com/ImageMagick/ImageMagick6/commit/ed771d3f00a2835951871f768f6dd83c16547399)
- coorected initialization of flip_y variable [`2ed5282`](https://github.com/ImageMagick/ImageMagick6/commit/2ed5282de4848c2d667967f3b7948ca524fde48d)
- eliminate possible integer overflow [`1cc6184`](https://github.com/ImageMagick/ImageMagick6/commit/1cc6184bf1960a198323780d33121d1ded949dfa)
- support writing WPG images [`fabd043`](https://github.com/ImageMagick/ImageMagick6/commit/fabd0439f58a6c41cfdf5d701c068a7ced879ea8)
- remove extraneous parameter [`0ab0dd3`](https://github.com/ImageMagick/ImageMagick6/commit/0ab0dd303c1ad81ce12dbf0cf772576f8814719e)
- release [`7a5b323`](https://github.com/ImageMagick/ImageMagick6/commit/7a5b3238592160a48c801b2766b35afae0ddf76e)

## [6.9.12-72](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-71...6.9.12-72) - 2022-12-30

### Commits

- beta release [`850fb00`](https://github.com/ImageMagick/ImageMagick6/commit/850fb00d9296669fd31a7a234242eacc330fcbb3)
- respect the TIFF offset prefix (https://github.com/ImageMagick/ImageMagick/issues/5768) [`a45686d`](https://github.com/ImageMagick/ImageMagick6/commit/a45686d30fb5785d7f0cb8a0e8efdeb75eabfe08)
- slight optimization + cosmetic [`f559bbd`](https://github.com/ImageMagick/ImageMagick6/commit/f559bbdc6e76733c3d1a4b85197f728f77646042)
- remove spurious Exif namespace (https://github.com/ImageMagick/ImageMagick/issues/5768) [`a20d2d3`](https://github.com/ImageMagick/ImageMagick6/commit/a20d2d3d6ca1a2155f24884c126ac42346e1f924)
- release [`55ae040`](https://github.com/ImageMagick/ImageMagick6/commit/55ae040c3f3e89addbfab6408b179095618e49a8)

## [6.9.12-71](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-70...6.9.12-71) - 2022-12-28

### Commits

- beta release [`926e972`](https://github.com/ImageMagick/ImageMagick6/commit/926e972cceeb93415728c98883711b88bc59167a)
- Removed CHANGELOG.md [`bcf8fbd`](https://github.com/ImageMagick/ImageMagick6/commit/bcf8fbde2a1f38f41b1cb562882732f304cd1091)
- Disable shared build for xz. [`ce83eaa`](https://github.com/ImageMagick/ImageMagick6/commit/ce83eaa7c76c8ba707171cbca50bbf47223dff34)
- note those pesky NULL entities [`2e63ad9`](https://github.com/ImageMagick/ImageMagick6/commit/2e63ad94cffc1dd23004a6a41a66e38ea6cad23b)
- rework beta badge [`06642c3`](https://github.com/ImageMagick/ImageMagick6/commit/06642c31c999a36679ffe290929b1a1edb9fc579)
- set character encoding to UTF-8 [`46d0662`](https://github.com/ImageMagick/ImageMagick6/commit/46d06625e225ae4f99ceb63a86cdad4ae8151082)
- support hue colorspace quantization [`d67d59b`](https://github.com/ImageMagick/ImageMagick6/commit/d67d59b80c3bae43677559b117cef34b1d78e217)
- check for EOF [`f334a6f`](https://github.com/ImageMagick/ImageMagick6/commit/f334a6f10234d3d71b596981fb2d3f6dc72513e8)
- latest method signatures [`f2d8a00`](https://github.com/ImageMagick/ImageMagick6/commit/f2d8a00c09885a977b80f10003fac501d3178f87)
- inline method [`17f5dcf`](https://github.com/ImageMagick/ImageMagick6/commit/17f5dcf96d942455ed1920799effc64a16d3576d)
- account for TIFF offset in Exif profile [`f1953d5`](https://github.com/ImageMagick/ImageMagick6/commit/f1953d5f169974d98ff977dce53bf309bdd49e4a)
- release [`32a9cd1`](https://github.com/ImageMagick/ImageMagick6/commit/32a9cd10ed4d13f03ab304caa33304e5ff379dfa)
- release [`f97d790`](https://github.com/ImageMagick/ImageMagick6/commit/f97d79002454c62dd87469138f3e9269e87c8b55)

## [6.9.12-70](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-69...6.9.12-70) - 2022-12-17

### Commits

- beta release [`7ab57d5`](https://github.com/ImageMagick/ImageMagick6/commit/7ab57d516ed17f18a9cf92bc58dbb9f9d62c2d63)
- proper Exif profile handling in HEIC (https://github.com/ImageMagick/ImageMagick/issues/5647) [`d1a8d86`](https://github.com/ImageMagick/ImageMagick6/commit/d1a8d86a124651a1b26323a404e3af4b479f6b76)
- remove spurious exception argument [`2717613`](https://github.com/ImageMagick/ImageMagick6/commit/2717613c12d2503e9e4a2e91aa73e3b9c22a9d1a)
- cosmetic [`0ed7e15`](https://github.com/ImageMagick/ImageMagick6/commit/0ed7e153a56afa6c2f8cf8aac1d978117c226d1e)
- ... [`77d9eea`](https://github.com/ImageMagick/ImageMagick6/commit/77d9eeae68687f0343a19024d1b0abb5854836cb)
- ... [`6520c3f`](https://github.com/ImageMagick/ImageMagick6/commit/6520c3ff9d1c527bd2d8f34d9adbcf30be848b96)
- lastest documentation updates [`723884f`](https://github.com/ImageMagick/ImageMagick6/commit/723884fcf1d23008893bf3123891564595a56daf)
- lastest CSS updates [`509a279`](https://github.com/ImageMagick/ImageMagick6/commit/509a2791d17da1cb577ccfe83e520b70e8f92bea)
- release [`489d716`](https://github.com/ImageMagick/ImageMagick6/commit/489d716835b37e144d1c612969f425f47cb97643)
- release [`23f8e3f`](https://github.com/ImageMagick/ImageMagick6/commit/23f8e3fc084b9f8787fa6d38d6830db10f080125)

## [6.9.12-69](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-68...6.9.12-69) - 2022-12-10

### Commits

- beta release [`2c289b9`](https://github.com/ImageMagick/ImageMagick6/commit/2c289b93ca37888e34b4df05274d86f692282cac)
- Only write the gAMA chunk if the sRGB chunk is written too. However, write the gAMA chunk if gamma is not 1.0/2.2 and no sRGB chunk (https://github.com/ImageMagick/ImageMagick/issues/5850) [`6e952ab`](https://github.com/ImageMagick/ImageMagick6/commit/6e952abf8d5df8367982e036b6a5315c1e1b9b67)
- skip zero-length profiles [`d7563a6`](https://github.com/ImageMagick/ImageMagick6/commit/d7563a60eeb85e8a5afc4070cd254beedbe6855f)
- cosmetic [`e93d13c`](https://github.com/ImageMagick/ImageMagick6/commit/e93d13ca4c700b94eadf1cec428ae688bc730f6f)
- correct Image::compare documentation (https://github.com/ImageMagick/ImageMagick/discussions/5869) [`a707223`](https://github.com/ImageMagick/ImageMagick6/commit/a7072233fede1efd587212eb87a7de47a5087d27)
- support polling of image processing operation progress (https://github.com/ImageMagick/ImageMagick/discussions/5868) [`5f94001`](https://github.com/ImageMagick/ImageMagick6/commit/5f94001561c95b170f68c62365c921396abe250d)
- add checks for null tags when monitoring [`17a7dba`](https://github.com/ImageMagick/ImageMagick6/commit/17a7dba2e2d74c38b8c58ca53629fc8c08960cea)
- eliminate compiler warnings [`febfb42`](https://github.com/ImageMagick/ImageMagick6/commit/febfb42c958c69348a52139e4439662bb58f34b0)
- remove spurious file offset check [`f6213af`](https://github.com/ImageMagick/ImageMagick6/commit/f6213afaa7fb8d71e89e69b4c69d9bf1d5c84e2c)
- release [`370954d`](https://github.com/ImageMagick/ImageMagick6/commit/370954db753ebc771584a32cfc12f8bd7869b446)

## [6.9.12-68](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-67...6.9.12-68) - 2022-12-04

### Commits

- beta release [`d961654`](https://github.com/ImageMagick/ImageMagick6/commit/d9616546f5acecd284074b2f70a46f4284a076f5)
- https://github.com/ImageMagick/ImageMagick/discussions/5718 [`fa7d8a2`](https://github.com/ImageMagick/ImageMagick6/commit/fa7d8a2a2bbf6c00636546e9dd88b7b2a53208d4)
- set color reduction colorspace to that of the remap image [`719244f`](https://github.com/ImageMagick/ImageMagick6/commit/719244f6f7eec479d7081d64680ff43e74653db7)
- image profiles are const @ https://github.com/ImageMagick/ImageMagick/discussions/5743 [`9784c3e`](https://github.com/ImageMagick/ImageMagick6/commit/9784c3e0bcc9e9433f9bc06f5af50dffb96f1418)
- libdps delegate library must be specifically requested @ https://github.com/ImageMagick/ImageMagick/discussions/5742 [`c586a2f`](https://github.com/ImageMagick/ImageMagick6/commit/c586a2f4c850bc074a8c8d91de7efb374bf3c87a)
- cosmetic [`45bd478`](https://github.com/ImageMagick/ImageMagick6/commit/45bd478a15dd24ece2a7468ab2d5a9c6887a4673)
- paramater is double, cast [`c7ee0c9`](https://github.com/ImageMagick/ImageMagick6/commit/c7ee0c96a6d0d3234ea59a0f719df0894b1ae965)
- Added devcontainer for GitHub codespaces. [`89de253`](https://github.com/ImageMagick/ImageMagick6/commit/89de253be24f9a8c8da6676250513de35f0411bb)
- Corrected path. [`4c06386`](https://github.com/ImageMagick/ImageMagick6/commit/4c06386a96cfa34fe74ed16e5ef7416458cf744f)
- Corrected folder. [`50b74f1`](https://github.com/ImageMagick/ImageMagick6/commit/50b74f1cccf3b6db8c8b192293d01f6dc7c74f74)
- Make file executable. [`ed61e6d`](https://github.com/ImageMagick/ImageMagick6/commit/ed61e6d4929702940d3d87e6a126515ba049413b)
- Changed flags. [`40f5968`](https://github.com/ImageMagick/ImageMagick6/commit/40f5968a7e3254db2290df523f822265f2e75149)
- Removed unused variable. [`598df50`](https://github.com/ImageMagick/ImageMagick6/commit/598df508ee8427926273d123f190444c65285928)
- Removed flags. [`623de25`](https://github.com/ImageMagick/ImageMagick6/commit/623de25efcc8c98d078dcd18e396a3479c0dba3a)
- Use shared instead of static build. [`4e253de`](https://github.com/ImageMagick/ImageMagick6/commit/4e253de32beca05018185c31347019b516cb29ee)
- avoid an unlikely divide by zero [`d187913`](https://github.com/ImageMagick/ImageMagick6/commit/d187913aa761a70b9c431ffdd2ed9b17a7bf4257)
- Removed unbound variable. [`f2e2cc8`](https://github.com/ImageMagick/ImageMagick6/commit/f2e2cc84a94303336a38ae8632ca3b52f1bf18e3)
- Corrected flags. [`f9f28b6`](https://github.com/ImageMagick/ImageMagick6/commit/f9f28b6c54f07d46ad9c7eab6ead99b1994574be)
- Reverted changes [`2deaa5a`](https://github.com/ImageMagick/ImageMagick6/commit/2deaa5aef5f637d5c9f2f2e5882e0d76e73ed433)
- More fixed for shared build. [`2d21d6f`](https://github.com/ImageMagick/ImageMagick6/commit/2d21d6f73b19d5599ff22e931f06d0f121205d0a)
- Also set LD_LIBRARY_PATH. [`2b3d452`](https://github.com/ImageMagick/ImageMagick6/commit/2b3d45239d92e39e6a28346360d70c81e2a5b077)
- Silenced warning. [`b1039b6`](https://github.com/ImageMagick/ImageMagick6/commit/b1039b69939ab80b7fa9a23b9d0fed3609b20d4a)
- squash coverity defect [`87cd279`](https://github.com/ImageMagick/ImageMagick6/commit/87cd279013462e126c81ab31d91a75179d0d4d22)
- the Flashpix library now requires you explicitedly enable it when configuring [`cbd6a54`](https://github.com/ImageMagick/ImageMagick6/commit/cbd6a547c00ed2a9a2294a542a0f693877743c94)
- void shift overflow [`137ac77`](https://github.com/ImageMagick/ImageMagick6/commit/137ac775fcf63874dd5e72aa34e02cc223fbb22a)
- Changed version number in file of the portable release. [`534100a`](https://github.com/ImageMagick/ImageMagick6/commit/534100a0ab69f062cd3e0774b04279d26e4f6f8e)
- disable blob support for SVG coder @ https://github.com/ImageMagick/ImageMagick6/issues/192 [`fd4f60b`](https://github.com/ImageMagick/ImageMagick6/commit/fd4f60b85865ad694aae5ad151a4cedb543e0cf9)
- support jxl image type [`5117c49`](https://github.com/ImageMagick/ImageMagick6/commit/5117c49d50f10cf1f0a200d65dd85e767d512781)
- latest autoconf update [`95e6833`](https://github.com/ImageMagick/ImageMagick6/commit/95e6833d7e8594329327ece78aeaaa46af799f15)
- add support for JXL images [`d00d1c5`](https://github.com/ImageMagick/ImageMagick6/commit/d00d1c5035cb1b8e2bf0fa0b7409ea8d442ce315)
- eliminate compiler errors [`b5d5b90`](https://github.com/ImageMagick/ImageMagick6/commit/b5d5b90fa80cd73839da8a22fcd9d326de0bc96b)
- implement suggestions from a static analyzer [`3abec67`](https://github.com/ImageMagick/ImageMagick6/commit/3abec6749a9b0e7ea735957e845cefd7066da390)
- compress binary image [`1ec14cb`](https://github.com/ImageMagick/ImageMagick6/commit/1ec14cb90a7c246ba2e314edc23750f78c1e44f3)
- remove cast [`67f40c8`](https://github.com/ImageMagick/ImageMagick6/commit/67f40c8b0c477e800148065df49a2c5d814b7325)
- update manifest [`3ef8d61`](https://github.com/ImageMagick/ImageMagick6/commit/3ef8d61506b9a8e763efee73787266a4dadcc13c)
- set coder description [`59f5c2e`](https://github.com/ImageMagick/ImageMagick6/commit/59f5c2e7faeafb0ec69339fe1d322f91a52f007d)
- https://github.com/ImageMagick/ImageMagick/issues/5783 [`0a44a52`](https://github.com/ImageMagick/ImageMagick6/commit/0a44a52da4ccfd077a91a138b82a24276d3aa3ef)
- only open X display once when rendering text @ https://github.com/ImageMagick/ImageMagick/discussions/5779 [`e74ff0a`](https://github.com/ImageMagick/ImageMagick6/commit/e74ff0a76c81089f0433bd9b20c8c124dc582a83)
- proper support for XMP profile [`cc4e5a6`](https://github.com/ImageMagick/ImageMagick6/commit/cc4e5a6383961c03d340e0237feedfff83f9af0b)
- proper support for the XMP profile [`03d3481`](https://github.com/ImageMagick/ImageMagick6/commit/03d348175230ed1f9612e97e87388b1dc147d486)
- JxlDecoderGetBoxSizeRaw() require unit64_t parameter [`67d6f79`](https://github.com/ImageMagick/ImageMagick6/commit/67d6f7943a8531a6796be6ac4b10026712076d69)
- support EXIF profile [`4c5f19b`](https://github.com/ImageMagick/ImageMagick6/commit/4c5f19b459ebc41f997cf7b0cb4810bb5eb78bb7)
- one new many parameters [`603a2a9`](https://github.com/ImageMagick/ImageMagick6/commit/603a2a961cb1b419c8f98f18ebd80f558c0aadc7)
- remove support for JXL image format, it was just an experiment! [`6a32d7f`](https://github.com/ImageMagick/ImageMagick6/commit/6a32d7f880a57e97aa47c285a26f7771501c2f15)
- support addition Si prefixes [`547dbc2`](https://github.com/ImageMagick/ImageMagick6/commit/547dbc2f51d40e0cf2fcf6a390e1424e2f91122e)
- Revert "proper support for the XMP profile" [`82f9d42`](https://github.com/ImageMagick/ImageMagick6/commit/82f9d42342de0a33bf93376709edf62bf947c7f5)
- corrects misspellings identified by the check-spelling action, thanks to @jsoref [`057a3d9`](https://github.com/ImageMagick/ImageMagick6/commit/057a3d9350424b63d411390b592fe4fee7df3a98)
- latest web site updates [`b54678d`](https://github.com/ImageMagick/ImageMagick6/commit/b54678d4485d4c7d45cd501ed8500be258373a7e)
- spelling corrections @ https://github.com/ImageMagick/ImageMagick/pull/5789 [`513b180`](https://github.com/ImageMagick/ImageMagick6/commit/513b18040bff4945ce67e77b82d0390d64f093ff)
- eliminate static analysis warnings [`f866c59`](https://github.com/ImageMagick/ImageMagick6/commit/f866c59a83173b226b0543897f357c619a1227ac)
- Chrome, Mozilla, GIMP do not assume sRGB (https://github.com/ImageMagick/ImageMagick/pull/5824) [`0c60e2e`](https://github.com/ImageMagick/ImageMagick6/commit/0c60e2ebb499465f969ec6fbf1243f85cbb3f0e5)
- Fixed build. [`7860ceb`](https://github.com/ImageMagick/ImageMagick6/commit/7860cebd77600816ba4683caf0afac0d088cc264)
- label not centered with gravity (https://github.com/ImageMagick/ImageMagick/issues/5834) [`2a2a6c3`](https://github.com/ImageMagick/ImageMagick6/commit/2a2a6c3281793804458393ef2e6b3c631f593755)
- latest documentation [`e2ccacd`](https://github.com/ImageMagick/ImageMagick6/commit/e2ccacd2b70b65c96b3d9e2c8018253a96f3ca26)
- cosmetic [`c84961c`](https://github.com/ImageMagick/ImageMagick6/commit/c84961c6a3e21cc10622ef3d37100c7bb55ce7b5)
- release [`9e4608c`](https://github.com/ImageMagick/ImageMagick6/commit/9e4608c35b3b0ac54cbb9e507035a1c87953ff09)
- eliminate compiler warnings [`a107c59`](https://github.com/ImageMagick/ImageMagick6/commit/a107c598120e2a6ed8469bc899ac4bdc9cd45cf1)
- release [`9766630`](https://github.com/ImageMagick/ImageMagick6/commit/9766630936aaada8de20bd0799d3b0937e45399b)

## [6.9.12-67](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-66...6.9.12-67) - 2022-11-06

### Merged

- coders: Enable opening https files in mingw [`#201`](https://github.com/ImageMagick/ImageMagick6/pull/201)
- utilities: Enable support for unicode paths in mingw [`#200`](https://github.com/ImageMagick/ImageMagick6/pull/200)

### Commits

- beta release [`e8d6fb4`](https://github.com/ImageMagick/ImageMagick6/commit/e8d6fb4a13e18a267a63083942a2b2c4cd0f870c)
- optionally get author or comment [`41d847b`](https://github.com/ImageMagick/ImageMagick6/commit/41d847bac6500b186c8944b6bb5b0fc3b9815d91)
- cosmetic [`4d002f8`](https://github.com/ImageMagick/ImageMagick6/commit/4d002f8c9e477cd4ccbeb60db52f303bfa0fbf2f)
- eliminate unnecessary file open when globbing (thanks to P Antoine) [`689288c`](https://github.com/ImageMagick/ImageMagick6/commit/689288c0653f68f85c74eaddac65bda55d12f736)
- OCE-2022-70: DoS at Stdin [`be3b2a0`](https://github.com/ImageMagick/ImageMagick6/commit/be3b2a02cbb9c9affa7b0afa0665ed4b4bb0f47b)
- possible DoS @ stdin (OCE-2022-70); possible arbitrary file leak (OCE-2022-72) [`3c5188b`](https://github.com/ImageMagick/ImageMagick6/commit/3c5188b41902a909e163492fb0c19e49efefcefe)
- revert scene check [`4d96ae3`](https://github.com/ImageMagick/ImageMagick6/commit/4d96ae3d8d3a24e6f6a78cd35c9feca77937204f)
- Use new certificate. [`f719528`](https://github.com/ImageMagick/ImageMagick6/commit/f719528738c01a9e2965b7d8ae04f0300940a44a)
- cosmetic [`23682b2`](https://github.com/ImageMagick/ImageMagick6/commit/23682b2e06404ae4b532901fc9a16335abe9c592)
- enhanced delete list parsing [`1b71210`](https://github.com/ImageMagick/ImageMagick6/commit/1b712105afb6dcecb54e55f26e23cec8e4d153f2)
- cosmetic [`1965430`](https://github.com/ImageMagick/ImageMagick6/commit/196543045e30fd8cb4bab4ed8a044e19222057eb)
- support `-delete registry:NAME` to delete images from the system registry [`9ea2c72`](https://github.com/ImageMagick/ImageMagick6/commit/9ea2c725430302f00a8d5e30f2c46535dfcecfcc)
- string optimization [`3e481e0`](https://github.com/ImageMagick/ImageMagick6/commit/3e481e0562d7819053487ad0e035c645278561b9)
- allow for EOF [`8bb5871`](https://github.com/ImageMagick/ImageMagick6/commit/8bb58713b7a8896fe992dcbf175ee283713d8069)
- Fixed build error. [`ed88059`](https://github.com/ImageMagick/ImageMagick6/commit/ed8805979668a4b19091269701093bda38a379f1)
- rotate HLS by 120 degrees (private email from John Z) [`09ca1d6`](https://github.com/ImageMagick/ImageMagick6/commit/09ca1d666185c056b5ea096a2cc1b3acd81394b9)
- blob byte optimization [`6d59262`](https://github.com/ImageMagick/ImageMagick6/commit/6d592628881d1f23c30efcf2b615cb51ae85d314)
- optimize reading blob string [`e90e20b`](https://github.com/ImageMagick/ImageMagick6/commit/e90e20b07e124cc674242c9a5b80ea9729aa100a)
- proper boundary check [`164495d`](https://github.com/ImageMagick/ImageMagick6/commit/164495d62f9c5672c865d49eaaa3efe2145196b3)
- register WebP mime type [`519db89`](https://github.com/ImageMagick/ImageMagick6/commit/519db89c68731980c97c9c4bc0dea973945d85e7)
- fix monochrome colormap [`5f927ba`](https://github.com/ImageMagick/ImageMagick6/commit/5f927ba5be9e1c85f4dfff3d9d04b7b24e058445)
- Fixed build error. [`dddd070`](https://github.com/ImageMagick/ImageMagick6/commit/dddd070428b277fd370e140e6d97782f3ae57c4e)
- set blob EOF flag [`efcac58`](https://github.com/ImageMagick/ImageMagick6/commit/efcac589d30abec140a2ae67311b3da4b8f2dd8c)
- https://github.com/ImageMagick/ImageMagick/pull/5713 [`53ae953`](https://github.com/ImageMagick/ImageMagick6/commit/53ae953ec6366bdde5996581e6f32e84de86f3ca)
- https://github.com/ImageMagick/ImageMagick6/pull/200/ [`9f90498`](https://github.com/ImageMagick/ImageMagick6/commit/9f904987aaffb67c78ca4a7750e8c4da6d7b848e)
- https://github.com/ImageMagick/ImageMagick6/pull/200 [`13dc4f5`](https://github.com/ImageMagick/ImageMagick6/commit/13dc4f58273166ffe79bd9cc12b22e4e9ac7f82b)
- initialize package key [`c4b156b`](https://github.com/ImageMagick/ImageMagick6/commit/c4b156b66f2e090458cf92c0ff63157e9d80756d)
- release [`d8d018c`](https://github.com/ImageMagick/ImageMagick6/commit/d8d018c0248a24c458b34a9f2d1091a1a700c35b)

## [6.9.12-66](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-65...6.9.12-66) - 2022-10-16

### Commits

- beta release [`ab1b97a`](https://github.com/ImageMagick/ImageMagick6/commit/ab1b97a63832d7a40318ca74de27f6d8ec859777)
- eliminate compiler warning [`3d3b982`](https://github.com/ImageMagick/ImageMagick6/commit/3d3b982795fbd3bc4146d15d0609c86081a2bcf2)
- obtain scene from image structure [`f20861f`](https://github.com/ImageMagick/ImageMagick6/commit/f20861fc45695c715cc05417f84c334de1ba88f7)
- prevent undefined shift [`20875a2`](https://github.com/ImageMagick/ImageMagick6/commit/20875a296cd832d3918951191b975f4d1ca364dc)
- fix undefined-shift in ReadTGAImage @ https://oss-fuzz.com/testcase?key=5129864151957504 [`b79a3d6`](https://github.com/ImageMagick/ImageMagick6/commit/b79a3d632a67c4d50b1d4d561c5c617e3300c2bb)
- prevent divide by zero exception [`ca70f7b`](https://github.com/ImageMagick/ImageMagick6/commit/ca70f7b6eb9df217216085763b1a37cb679817c5)
- release [`b05ba50`](https://github.com/ImageMagick/ImageMagick6/commit/b05ba50aef9a02a8a882b6a3684b9532b42f2ad5)

## [6.9.12-65](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-64...6.9.12-65) - 2022-10-08

### Commits

- beta release [`ebaecd5`](https://github.com/ImageMagick/ImageMagick6/commit/ebaecd5d5c09e950ef121d8ce7508aeae4c343c4)
- Mark allow list of characters const. [`33e1d68`](https://github.com/ImageMagick/ImageMagick6/commit/33e1d68cfbf30d8b7f502cfdc10d70ba435014c1)
- Fix HEIF header include path for MINGW [`f7b9bff`](https://github.com/ImageMagick/ImageMagick6/commit/f7b9bff6b562547be560df134627cc7c961cc74d)
- Tiny optimization. [`23d3a0e`](https://github.com/ImageMagick/ImageMagick6/commit/23d3a0e548557b8e5db9c0773369129545aba1c1)
- Removed duplicate check. [`74facca`](https://github.com/ImageMagick/ImageMagick6/commit/74faccac51263f7bdbb33f0a5c7c97d15cb293bd)
- Code style change. [`0dcca29`](https://github.com/ImageMagick/ImageMagick6/commit/0dcca29ecfe9b1124b9eef2be91bd8fb856150d3)
- Use ReadStrip method when bit depth is higher than 8 [`abfc2b2`](https://github.com/ImageMagick/ImageMagick6/commit/abfc2b2c966312caf3234f2cbe7d4b107e79a3d6)
- Fixed incorrect calculation of the extra_samples (#198) [`34e4e2e`](https://github.com/ImageMagick/ImageMagick6/commit/34e4e2e8b9643f73074a8810d4a0114631c82bcd)
- Corrected version format to be compatible with Ghostscript 10.00.0 [`a9db491`](https://github.com/ImageMagick/ImageMagick6/commit/a9db4918a2f317f358f0971176ffd21d6b25a468)
- Correct quotes around the password, the old way no longer works with version 10.00.0 of Ghostscript. [`b4da95b`](https://github.com/ImageMagick/ImageMagick6/commit/b4da95b6b6bc4a09fae1fe1bd9eadf429d28561c)
- Corrected bounds calculation. [`13db223`](https://github.com/ImageMagick/ImageMagick6/commit/13db2233b6d14cbc43a5833ba699c78e8874bff1)
- account for null basename property @ https://github.com/ImageMagick/ImageMagick/issues/5624 [`b0079db`](https://github.com/ImageMagick/ImageMagick6/commit/b0079db3dd78175c08f3ebcd8e96ea6c2cb8b451)
- fix incorrect handling of SQ groups in header @ https://github.com/ImageMagick/ImageMagick/issues/5606 [`2783eaa`](https://github.com/ImageMagick/ImageMagick6/commit/2783eaa6e94f3d73e0718e97233c4a8833f3034b)
- support 1-bit pixels [`09f90b6`](https://github.com/ImageMagick/ImageMagick6/commit/09f90b61ffe604fa6b7b77ac768e3d41e7943938)
- release [`83634ca`](https://github.com/ImageMagick/ImageMagick6/commit/83634ca7654e37428f035113f50ecfb985f19005)

## [6.9.12-64](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-63...6.9.12-64) - 2022-09-24

### Commits

- beta release [`a61afe1`](https://github.com/ImageMagick/ImageMagick6/commit/a61afe1d45dae992ff80d22036f3791ad953dd8d)
- eliminate compiler warning [`0471b6b`](https://github.com/ImageMagick/ImageMagick6/commit/0471b6b90d11d92e9b9a1d447c4b1261e3524b2f)
- check exception signature [`1ef09ad`](https://github.com/ImageMagick/ImageMagick6/commit/1ef09ad78dc4830cdd49b184c7d3195ce2dc5ba4)
- improved JP2 header checking [`5d57f59`](https://github.com/ImageMagick/ImageMagick6/commit/5d57f5967bc78e4b1fb81f36a47671cd56fcf81a)
- prevent integer overflow @ oss-fuzz [`a3b05e5`](https://github.com/ImageMagick/ImageMagick6/commit/a3b05e5118e059d073d5582e1630c08252811f09)
- eliminate use of unitialized variable [`4670eba`](https://github.com/ImageMagick/ImageMagick6/commit/4670eba5acfd8ec22163b9e7ba326d79e2c1702f)
- earlier check for maximum channels [`0b05e1f`](https://github.com/ImageMagick/ImageMagick6/commit/0b05e1fa767f29bfda7e8a264c539f95b4f1c220)
- cast unsigned char to int before 8-bit shift [`8651f94`](https://github.com/ImageMagick/ImageMagick6/commit/8651f94cf3ce14b8581393dab2f9f637bdf027df)
- exit on EOF @ https://github.com/ImageMagick/ImageMagick6/issues/197 [`24b31a8`](https://github.com/ImageMagick/ImageMagick6/commit/24b31a82ce33db3a555adc1d03e602c7e5fcd82a)
- release [`6ca369b`](https://github.com/ImageMagick/ImageMagick6/commit/6ca369be4b07c7e2a7b6c56bb504d9bb88e44cb3)

## [6.9.12-63](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-62...6.9.12-63) - 2022-09-11

### Commits

- beta release [`fff48fd`](https://github.com/ImageMagick/ImageMagick6/commit/fff48fd2f05be1ed83c58b4f27351061c824ad0a)
- heap-buffer-overflow for crafted TIFF image; alert from Hardik [`1c0d1b3`](https://github.com/ImageMagick/ImageMagick6/commit/1c0d1b328b610bc4b47a3f4f43ae533feaa49309)
- incorrect bounds checking for draw affine @ https://github.com/ImageMagick/ImageMagick/issues/5497 [`c5a9368`](https://github.com/ImageMagick/ImageMagick6/commit/c5a9368d871943eceafce143bb87612b2a9623b2)
- repair memory issues for the unit tests [`a0ce171`](https://github.com/ImageMagick/ImageMagick6/commit/a0ce171e29d6d324d9b60e09625761168692220d)
- correct PSNR distortion @ https://github.com/ImageMagick/ImageMagick/issues/5504 [`0f7d057`](https://github.com/ImageMagick/ImageMagick6/commit/0f7d057cc1ac019ef6a02a5228841c9cb709adc5)
- fix PSNR to return the correct location for similarity search @ https://github.com/ImageMagick/ImageMagick/issues/5504 [`ebea224`](https://github.com/ImageMagick/ImageMagick6/commit/ebea22418b6eea391c5a34b22d99a970e6cd453e)
- Fixed build. [`f8039c2`](https://github.com/ImageMagick/ImageMagick6/commit/f8039c2963b160830e5701c9aa5095b8fd760358)
- properly handle a PSNR of 0 (undefined) [`ced007b`](https://github.com/ImageMagick/ImageMagick6/commit/ced007b0df0fa1251830b83a65d42d8694f8e858)
- return normalized PSNR [`8382a97`](https://github.com/ImageMagick/ImageMagick6/commit/8382a978591751070bef4f2be2946b6bb8a6402c)
- Build fixes. [`5ef57c3`](https://github.com/ImageMagick/ImageMagick6/commit/5ef57c31ea701758fec69d240a1650405c468c38)
- log10(0) is -inf [`56eb280`](https://github.com/ImageMagick/ImageMagick6/commit/56eb280b6b0be69a4367c177a4815b44fc4e4899)
- log10(0) is -inf [`49579d6`](https://github.com/ImageMagick/ImageMagick6/commit/49579d674245fb45ac383bb3e4f77574c2691b8b)
- Use CheckMergedImageAlpha method. [`e287944`](https://github.com/ImageMagick/ImageMagick6/commit/e287944ac23d038bf2b1fff17067d1a957c984da)
- Removed define that was only used once. [`9564611`](https://github.com/ImageMagick/ImageMagick6/commit/95646110230fdff39dc7aae32dd56295fa527ff9)
- validate class name [`032425e`](https://github.com/ImageMagick/ImageMagick6/commit/032425e4c4e94e9dee3efc0d47a7c7532b677ac7)
- validate stroke width [`3072a10`](https://github.com/ImageMagick/ImageMagick6/commit/3072a1082750ce43474c97ae971b51f7922721a1)
- render empty labels @ https://github.com/ImageMagick/ImageMagick/issues/5530 [`7f0c40a`](https://github.com/ImageMagick/ImageMagick6/commit/7f0c40aa9527c5c0f8ba5fe8cb2e9e85d3b0836f)
- recognize CSS-style family font list @ https://github.com/ImageMagick/ImageMagick/issues/5531 [`ed48ebb`](https://github.com/ImageMagick/ImageMagick6/commit/ed48ebbfcda5f01be9715c69510ea7449cecec12)
- throw exception for empty label @ https://github.com/ImageMagick/ImageMagick/issues/5530 [`838331d`](https://github.com/ImageMagick/ImageMagick6/commit/838331d2548ace89cc075e9ca829ef507b82779f)
- remove extra space @ https://github.com/ImageMagick/ImageMagick/pull/5513 [`dce2fa2`](https://github.com/ImageMagick/ImageMagick6/commit/dce2fa2e50d2e0c08ac6e087d258dc2bf3a788c9)
- eliminate compiler exception [`e7c2ba5`](https://github.com/ImageMagick/ImageMagick6/commit/e7c2ba5ce78a5d0beffee7f133c062fb61739f06)
- create a single instance of MagickLog10() method in private header [`909d28e`](https://github.com/ImageMagick/ImageMagick6/commit/909d28ecb37dff048d56eaed81593e7de5c1232b)
- initialize directory stack [`c5fb867`](https://github.com/ImageMagick/ImageMagick6/commit/c5fb867cd6287b7d9480ec5d1b150ec84bc1b3f9)
- fix short reallocation @ https://github.com/ImageMagick/ImageMagick/issues/5553 [`d4f33aa`](https://github.com/ImageMagick/ImageMagick6/commit/d4f33aa492bb136e6fc39039d898dda21344b8ad)
- proper overflow check [`01c25ec`](https://github.com/ImageMagick/ImageMagick6/commit/01c25ec1f96cd920bc45433545847103c78e76d0)
- don't transform to sRGB colorspace if already in a compatible colorspace @ https://github.com/ImageMagick/ImageMagick/discussions/5543 [`59953e7`](https://github.com/ImageMagick/ImageMagick6/commit/59953e741c004f84b4a164d430a1be5ca3db2d44)
- release [`4cdfdde`](https://github.com/ImageMagick/ImageMagick6/commit/4cdfdde859087631d22fd7ddf2e170b6fd387766)

## [6.9.12-62](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-61...6.9.12-62) - 2022-08-27

### Commits

- beta release [`5630628`](https://github.com/ImageMagick/ImageMagick6/commit/56306282250c38a60fa99d0d3eec5637c21f6ed3)
- correct normalization for the complex magnitude-phase option [`a30cd69`](https://github.com/ImageMagick/ImageMagick6/commit/a30cd699a99197b858a827012d5ff217a6c85e3f)
- remove legacy codeset [`31186d3`](https://github.com/ImageMagick/ImageMagick6/commit/31186d32a2c49a2a38bf86f4d892ebee18a69998)
- Check for quantum pad overflow (issue notification from hardik) [`e5733f4`](https://github.com/ImageMagick/ImageMagick6/commit/e5733f455c5eb7db0c90e80ce8226e98e80242ba)
- more conservative max pad [`224fae4`](https://github.com/ImageMagick/ImageMagick6/commit/224fae467219526037bff22d8acab0b7a9e00788)
- Add missing closing bracket in txt coder [`3427f44`](https://github.com/ImageMagick/ImageMagick6/commit/3427f44880d037ffddee641318720b0ca69043cf)
- added case HSIColorspace into TrueColor switch statement for ModulateImage [`c720379`](https://github.com/ImageMagick/ImageMagick6/commit/c720379b3f98e981cf8bdb6a861c819a1d1cd807)
- eliminate undefined behavior, fuzz issue from Hardik [`dbd0b82`](https://github.com/ImageMagick/ImageMagick6/commit/dbd0b82db161855412d374d97c9175a2a8c8d5ce)
- check for extra samples when computing pad, alert from Hardik [`85f7481`](https://github.com/ImageMagick/ImageMagick6/commit/85f7481a3b985fa1fda5f9145d96d96152e43d77)
- eliminate pointer overflow, alert from Hardik [`033ed11`](https://github.com/ImageMagick/ImageMagick6/commit/033ed1152f057d1e098f69da4c40ab8d88836738)
- squash heap-buffer-overflow, PoC TIFF from Hardik [`1aea203`](https://github.com/ImageMagick/ImageMagick6/commit/1aea203eb36409ce6903b9e41fe7cb70030e8750)
- release [`0155def`](https://github.com/ImageMagick/ImageMagick6/commit/0155defb30a2f83299fd34bc857a08d6b5286b38)

## [6.9.12-61](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-60...6.9.12-61) - 2022-08-17

### Commits

- ... [`d86fcd3`](https://github.com/ImageMagick/ImageMagick6/commit/d86fcd37750cc1ee791bbdb0ccf04e53d1810e07)
- beta release [`8ceb059`](https://github.com/ImageMagick/ImageMagick6/commit/8ceb059156a5c22f55ae76d140cfef8014c70318)
- Removed ChangeLog.md [`0722fad`](https://github.com/ImageMagick/ImageMagick6/commit/0722fad133a3d9f2cbded5ce1577c84832612884)
- cosmetic [`19a9454`](https://github.com/ImageMagick/ImageMagick6/commit/19a94544ae9ef657c53098a696585a12e6046f15)
- need uintptr_t for pointer arithmetic @ https://github.com/ImageMagick/ImageMagick/discussions/5380 [`19d2899`](https://github.com/ImageMagick/ImageMagick6/commit/19d2899e93cba1a6f71693892163a552288a0901)
- eliminate compile warning [`9be1bec`](https://github.com/ImageMagick/ImageMagick6/commit/9be1bec6543d82e806c34455411aa3ebc8ed0e8f)
- NCC must return a value less or equal to 1 @ https://github.com/dlemstra/Magick.NET/issues/1220 [`3c2b5d2`](https://github.com/ImageMagick/ImageMagick6/commit/3c2b5d20870b124deb2a9f8ae4163558231f869f)
- move exit on timeout from MagickCore to magick utility @ https://github.com/dlemstra/Magick.NET/issues/445 [`78178df`](https://github.com/ImageMagick/ImageMagick6/commit/78178dfa7b05f5a8e92e007b50d908e59e1b04ea)
- cosmetic [`c22883b`](https://github.com/ImageMagick/ImageMagick6/commit/c22883bf26f4c4772ec8deef93f52c1ef7484e0b)
- a zero length line segment is not a point [`d12288f`](https://github.com/ImageMagick/ImageMagick6/commit/d12288f6ec12343647e5a69ce1ded53241322a2d)
- check for quantum buffer overrun only if NDEBUG is defined [`eb9c7e1`](https://github.com/ImageMagick/ImageMagick6/commit/eb9c7e1d8d2c46d04f85daa8e80125726d2e20eb)
- don't set bpp member [`269f03e`](https://github.com/ImageMagick/ImageMagick6/commit/269f03eebdac8101759470a20bc4e21bb2f8a4cd)
- sync results to morphology docs @ https://imagemagick.org/Usage/morphology/ [`0137f53`](https://github.com/ImageMagick/ImageMagick6/commit/0137f53c3295512174944e240b3767998241ae05)
- set explicit format @ https://github.com/ImageMagick/ImageMagick/issues/5444 [`48999c5`](https://github.com/ImageMagick/ImageMagick6/commit/48999c5c3d4c6680bf3374ed056a15296b798ccc)
- release [`5c3e72c`](https://github.com/ImageMagick/ImageMagick6/commit/5c3e72c3d99c7036ae85aad6b9c83efb734f933b)

## [6.9.12-60](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-59...6.9.12-60) - 2022-07-31

### Commits

- beta release [`93a4cb0`](https://github.com/ImageMagick/ImageMagick6/commit/93a4cb0925af6d5bd79e14719d9ff89c513e8418)
- beta release [`70b8287`](https://github.com/ImageMagick/ImageMagick6/commit/70b8287f15f46490d0e6a82f45704f8f4d67699a)
- omp_init_lock() has undefined behavior if the lock is already init'ed @ https://github.com/ImageMagick/ImageMagick/issues/5360 [`43ef18f`](https://github.com/ImageMagick/ImageMagick6/commit/43ef18f86967560c42bced0b9bbcf9cfb8578edd)
- conditionally destroy mutex [`063fbba`](https://github.com/ImageMagick/ImageMagick6/commit/063fbba0b08da3f5d41688bd5dfaa6722899436d)
- lock/unlock mutex assumes an initialized lock [`d978c4f`](https://github.com/ImageMagick/ImageMagick6/commit/d978c4fceb32159034f67db14824937d21d7cca4)
- fix -evaluate Pow 2 issue @ https://github.com/ImageMagick/ImageMagick/issues/5376 [`a723ba4`](https://github.com/ImageMagick/ImageMagick6/commit/a723ba462ffac5414c0a4556479782507c7454f7)
- cosmetic [`3ceef61`](https://github.com/ImageMagick/ImageMagick6/commit/3ceef61345cc8a119dcff5eb13da7a7c891854d0)
- remove uneccessary signature check [`847c4d6`](https://github.com/ImageMagick/ImageMagick6/commit/847c4d6aec929fbc4effab5d5df4841c0af71868)
- remove unneccessary variable [`65bd30e`](https://github.com/ImageMagick/ImageMagick6/commit/65bd30ea06861a7f94f31ebc506b539d4310f631)
- eliminate compiler issues / warnings [`23cccb5`](https://github.com/ImageMagick/ImageMagick6/commit/23cccb5fd4a51638734248451a27d0ee78b20f6a)
- fix cast from provenance-free integer type to pointer type @ https://github.com/ImageMagick/ImageMagick/discussions/5380 [`d289c00`](https://github.com/ImageMagick/ImageMagick6/commit/d289c006ff87efd5263a3976b94829ee0877ed3d)
- ... [`41a1701`](https://github.com/ImageMagick/ImageMagick6/commit/41a1701c024487ddc24b29003142cca806d016c4)
- authenticate distributed cache [`aacc6df`](https://github.com/ImageMagick/ImageMagick6/commit/aacc6dff2217d7f8581795d2932fc340abcd2597)
- eliminate compiler warning [`f3abf56`](https://github.com/ImageMagick/ImageMagick6/commit/f3abf56d494ec139fe8136935cbe2b1e734b9d86)
- divide NCC by the # of channels @ https://github.com/dlemstra/Magick.NET/issues/1220 [`b487617`](https://github.com/ImageMagick/ImageMagick6/commit/b4876171e49c97aaea52b3e8bbbdb071c9c433ab)
- release [`2e15d53`](https://github.com/ImageMagick/ImageMagick6/commit/2e15d53ddf34934cdbbc8dea86c0812e04f17bfb)
- improve distributed cache exception messages [`71fdec1`](https://github.com/ImageMagick/ImageMagick6/commit/71fdec19252c3c409349a89984f7869c5e11f8a5)
- release [`2cabb26`](https://github.com/ImageMagick/ImageMagick6/commit/2cabb261cdcbce931754c0ff87101123ab052d9b)

## [6.9.12-59](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-58...6.9.12-59) - 2022-07-24

### Commits

- beta release [`ecc4153`](https://github.com/ImageMagick/ImageMagick6/commit/ecc4153d3c8998a073e0781b13c11e421933e081)
- beta release [`e6947fa`](https://github.com/ImageMagick/ImageMagick6/commit/e6947fa6a7cacb9b0dc3dcebf9635c6dd151307f)
- respect configure's --disable-assert option [`521d343`](https://github.com/ImageMagick/ImageMagick6/commit/521d343a6016f4a7d8ee8c6eb902427f67c6981b)
- disable assert in ImageMagick specific header [`daae430`](https://github.com/ImageMagick/ImageMagick6/commit/daae430bb05ec03b91bedaecf069d6ec561a339b)
- Added extra checks to make sure we don't go out of bounds when checking spaces. [`427d089`](https://github.com/ImageMagick/ImageMagick6/commit/427d089dd191cdb431ca8405ee84eb5057512fa3)
- eliminate a double free per [`dcb6e1e`](https://github.com/ImageMagick/ImageMagick6/commit/dcb6e1ecacf99993d649cf97d7a29ef876ed3a1d)
- fix quoting for autoconf sendfile check [`897170a`](https://github.com/ImageMagick/ImageMagick6/commit/897170a24e8501d4aaebe251069b80678c417401)
- check for drawing primitive boundaries to prevent overflow [`95a6cc3`](https://github.com/ImageMagick/ImageMagick6/commit/95a6cc383f7249fe23822d52e1a87ebe0102b7ff)
- eliminate unitialized warning [`8eba5c8`](https://github.com/ImageMagick/ImageMagick6/commit/8eba5c8564d366256bc8481995ec8ca2602d2364)
- open blob before checking dimensions to avoid memory leak in [`feb6f92`](https://github.com/ImageMagick/ImageMagick6/commit/feb6f9228dd9dc9a06ed6847a2ccb151c80bf9d5)
- reset alpha channel on pattern coder @ https://github.com/ImageMagick/ImageMagick/discussions/5331 [`2abe2b0`](https://github.com/ImageMagick/ImageMagick6/commit/2abe2b0b804eaaa4648dc9dcd0a0d709a0511d7a)
- release [`a814e68`](https://github.com/ImageMagick/ImageMagick6/commit/a814e6814b7bd4c5ac975e1df4d199b6fdf5435e)
- add svg:decode to list of built-in delegates [`58ad458`](https://github.com/ImageMagick/ImageMagick6/commit/58ad45805c9c59eb80b85716eb0ba02f14b43c29)
- normalize enhancement is equivalent to -contrast-stretch 2x1% [`c478579`](https://github.com/ImageMagick/ImageMagick6/commit/c478579a28522c5fbda4a0c6ee68815bbd54bddb)
- release [`c007bb9`](https://github.com/ImageMagick/ImageMagick6/commit/c007bb9cb5e9ac28a013826c8a8827a3e537f2ca)
- release [`9a003dc`](https://github.com/ImageMagick/ImageMagick6/commit/9a003dce6b409637d4543cbd6647a6d2dc4db4e9)
- its okay for index pointer to be null @ https://github.com/ImageMagick/ImageMagick6/issues/191 [`7172b47`](https://github.com/ImageMagick/ImageMagick6/commit/7172b4756d43931af939ff34825377514fc2758c)
- release [`813e7ca`](https://github.com/ImageMagick/ImageMagick6/commit/813e7ca2e75c43ba32c3bf2ac2f9ff5111443553)

## [6.9.12-58](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-57...6.9.12-58) - 2022-07-09

### Commits

- beta release [`1da2b52`](https://github.com/ImageMagick/ImageMagick6/commit/1da2b52a3629ea0daa9a8af4f28b61b6c6bff4ba)
- release [`87fef5a`](https://github.com/ImageMagick/ImageMagick6/commit/87fef5a8217b52ee69af81ec9742fa362b53e776)
- beta release [`a63a9cd`](https://github.com/ImageMagick/ImageMagick6/commit/a63a9cdc0c4d9eaf112604404e71307b1170f0c0)
- release [`a085128`](https://github.com/ImageMagick/ImageMagick6/commit/a0851283f88ec0bc825804898a162b7d854d12dd)

## [6.9.12-57](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-56...6.9.12-57) - 2022-07-09

### Commits

- beta release [`5f44691`](https://github.com/ImageMagick/ImageMagick6/commit/5f44691a5bf010a322ca661374aaf57dbc95ef70)
- Added extra check because the flag was removed in 0.21-Beta1. [`09e6bf8`](https://github.com/ImageMagick/ImageMagick6/commit/09e6bf834fe3d8468d4d54931c8b17fa9a2f6258)
- release [`748e502`](https://github.com/ImageMagick/ImageMagick6/commit/748e502545cf4ab802757dd43a03fb5619b4dae2)

## [6.9.12-56](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-55...6.9.12-56) - 2022-07-06

### Commits

- beta release [`e304c92`](https://github.com/ImageMagick/ImageMagick6/commit/e304c92801d940c593169e903acb3761f04e3038)
- preserve input depth @ https://github.com/ImageMagick/ImageMagick6/issues/188 [`7dd14de`](https://github.com/ImageMagick/ImageMagick6/commit/7dd14de86de68f4ce88a23691ff30a91607e5894)
- forgot semicolon [`a3da7e2`](https://github.com/ImageMagick/ImageMagick6/commit/a3da7e24a5774fc76405e802fd835a414751b3f6)
- fix "inner" trim issue @ https://github.com/ImageMagick/ImageMagick6/issues/187 [`097f297`](https://github.com/ImageMagick/ImageMagick6/commit/097f2973146cdf14d0802b0f9cffa29d57303581)
- update to latest automake/autoconf release [`a2ebfb6`](https://github.com/ImageMagick/ImageMagick6/commit/a2ebfb639361961bb7344c875f8c6dfbd121ccaf)
- recognize SVG file if it starts with whitespace @ https://github.com/ImageMagick/ImageMagick/issues/5294 [`0b2e1b6`](https://github.com/ImageMagick/ImageMagick6/commit/0b2e1b6afc869c6517db08307aab54b6e8ec5824)
- correct space detection algorithm [`09917a5`](https://github.com/ImageMagick/ImageMagick6/commit/09917a59ca776976f5b630eec28dff7fa0c9032c)
- avoid OMP deadlock @ https://github.com/ImageMagick/ImageMagick/issues/5301 [`82e46b9`](https://github.com/ImageMagick/ImageMagick6/commit/82e46b9dd3f089a21c2f16633d3fb26657ccb1dc)
- release [`4d9149f`](https://github.com/ImageMagick/ImageMagick6/commit/4d9149f16c60fea0445ad99fdcd682a3dc754139)

## [6.9.12-55](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-54...6.9.12-55) - 2022-07-03

### Commits

- beta release [`e76b0f8`](https://github.com/ImageMagick/ImageMagick6/commit/e76b0f83395178375fbd35280f453a6c40ac825c)
- beta release [`d1d0a38`](https://github.com/ImageMagick/ImageMagick6/commit/d1d0a38df6f3770651f2c2ae37801ea9c4a8c8c9)
- prevent undefined-shift [`b962233`](https://github.com/ImageMagick/ImageMagick6/commit/b962233bfde5bdf7b2b8b3e06b00873056cc70f1)
- prevent possible buffer overrun [`4393e83`](https://github.com/ImageMagick/ImageMagick6/commit/4393e83230128de1cb798b67e798101d683380b1)
- We need to remove the stream ourselves when the call to FT_Open_Face fails. [`518a834`](https://github.com/ImageMagick/ImageMagick6/commit/518a834efdbfb1ab22d98d6495494f141b051b9a)
- Added missing call to DestroyString. [`5141d76`](https://github.com/ImageMagick/ImageMagick6/commit/5141d76e2044edfdb3ff117253e8d10461571d82)
- Fixed registry lookup because GhostScript now also writes the patch version to the registry. [`e1703af`](https://github.com/ImageMagick/ImageMagick6/commit/e1703afb9fd998c059b5e5de69823b11584c7fbb)
- Added extra malloc method to avoid early calls to the policy checks on Windows that causes #185. [`cbc47f3`](https://github.com/ImageMagick/ImageMagick6/commit/cbc47f3fb6cb2386fae8f085166e7758a2d7d4d3)
- Removed defines. [`2bdd8d0`](https://github.com/ImageMagick/ImageMagick6/commit/2bdd8d07e07d21eb39a1869d39da1b8ad52fc6c3)
- Only check for dll's in non static build. [`df3c026`](https://github.com/ImageMagick/ImageMagick6/commit/df3c0266e7cb0634e95de32da1bc3a1b03ce8be4)
- Set the client name and path earlier. [`3a6003e`](https://github.com/ImageMagick/ImageMagick6/commit/3a6003ef52fecd163eb05d8253d233d88d0898f4)
- update issues link [`7f248bd`](https://github.com/ImageMagick/ImageMagick6/commit/7f248bd0672e129798e7567c0a7bf5cdd732b87b)
- fix background opacity rounding @ https://github.com/ImageMagick/ImageMagick/issues/5264 [`ecf097c`](https://github.com/ImageMagick/ImageMagick6/commit/ecf097c0825f62f22ba65aab0821405932913b02)
- regression in support of MPEG video after coder name-change to "video" @ https://github.com/ImageMagick/ImageMagick6/issues/181 [`931d1fe`](https://github.com/ImageMagick/ImageMagick6/commit/931d1fe27a594797fff6bb7631e2a03a65b74bf8)
- cosmetic [`fa2c9a4`](https://github.com/ImageMagick/ImageMagick6/commit/fa2c9a46c1e5ebbea3e45ebdd2867d5e527b48a0)
- Also check extension to fix possible stack overflow. [`f0a0274`](https://github.com/ImageMagick/ImageMagick6/commit/f0a0274919a9de07b090c75c34952df510a8c4bd)
- eliminate possible buffer overflow [`2b4eabb`](https://github.com/ImageMagick/ImageMagick6/commit/2b4eabb9d09b278f16727c635e928bd951c58773)
- set group 4 photometric to min-is-white [`877b4dc`](https://github.com/ImageMagick/ImageMagick6/commit/877b4dc4efe10a56199914340ce8fad129d4897f)
- dasharray requires non-zero values [`dda0dcc`](https://github.com/ImageMagick/ImageMagick6/commit/dda0dccb56bf811d1043e29c8d46f92eb43d07cb)
- eliminate compiler warning [`7615041`](https://github.com/ImageMagick/ImageMagick6/commit/7615041cb424617643406fbf0a7040af541c1b12)
- restrict rows/columns to one keyword [`5dcfcf4`](https://github.com/ImageMagick/ImageMagick6/commit/5dcfcf47520a62f908f14d073e3ad902be0ae4c4)
- revert [`8872179`](https://github.com/ImageMagick/ImageMagick6/commit/8872179aad3797098e6964de094ab23e974826ef)
- eliminate uninitialized value warning [`46ee067`](https://github.com/ImageMagick/ImageMagick6/commit/46ee067255c778c53fbb02d019c772c1374528b1)
- port Dirk's version 7 patches to draw.c [`1b9ea43`](https://github.com/ImageMagick/ImageMagick6/commit/1b9ea43c03df4ea4af5f31b24d33a11d9f04b1d5)
- eliminate compiler warning [`349a176`](https://github.com/ImageMagick/ImageMagick6/commit/349a1761c161414ed274eb384dade7c669d2719c)
- eliminate compiler warning [`a59642a`](https://github.com/ImageMagick/ImageMagick6/commit/a59642ab57c44482242fe896eeb9941568cba9d9)
- fix scrambled image @ https://github.com/ImageMagick/ImageMagick/issues/5291 [`15e1459`](https://github.com/ImageMagick/ImageMagick6/commit/15e14592c54d8fcf80586b403b05b033ee865620)
- yikes, misspelled 'length' [`2061c9c`](https://github.com/ImageMagick/ImageMagick6/commit/2061c9c8abbf64e872e5dc067ea6c950ce2cd0b3)
- release [`77717cb`](https://github.com/ImageMagick/ImageMagick6/commit/77717cb8fbc6ea944db357ec8efa23ad283bfcf0)

## [6.9.12-54](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-53...6.9.12-54) - 2022-06-20

### Commits

- beta release [`a31b89a`](https://github.com/ImageMagick/ImageMagick6/commit/a31b89a3f0d848a73b52842e00b0693c2ce5e0e8)
- release [`0509015`](https://github.com/ImageMagick/ImageMagick6/commit/05090154b9ea16c895b84698b202d71867d48add)

## [6.9.12-53](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-52...6.9.12-53) - 2022-06-19

### Commits

- beta release [`2b152c1`](https://github.com/ImageMagick/ImageMagick6/commit/2b152c1243264b25b44c515ca95fa1827aeee423)
- update DOX config files [`d332de8`](https://github.com/ImageMagick/ImageMagick6/commit/d332de8a9943699cbb25e18d5105276367591260)
- update DOX config files [`d628017`](https://github.com/ImageMagick/ImageMagick6/commit/d6280179903bcc156a57e60560ed5c6d0ca68dac)
- update DOX config files [`45110c5`](https://github.com/ImageMagick/ImageMagick6/commit/45110c554e99e81d965d943aac55cdc5ef42d02f)
- only check the shred count once [`6d3db6f`](https://github.com/ImageMagick/ImageMagick6/commit/6d3db6f94b16458b82bfc3774fc107f1ec00a356)
- cosmetic [`8e90ab0`](https://github.com/ImageMagick/ImageMagick6/commit/8e90ab0d47a47e07b34c745dd1db6e91a6cedefc)
- cosmetic [`1671346`](https://github.com/ImageMagick/ImageMagick6/commit/1671346143f77ea68519497dcbf2e6070b915f72)
- system:shred value has precedence over MAGICK_SHRED_PASSES [`a29777d`](https://github.com/ImageMagick/ImageMagick6/commit/a29777d26b4bb6ba4f7824009e1b6f266c639177)
- support shredding memory pools [`e5dbbb0`](https://github.com/ImageMagick/ImageMagick6/commit/e5dbbb0afac0a615320530f9f7988d091d80b916)
- update memory pointer [`ea8c73a`](https://github.com/ImageMagick/ImageMagick6/commit/ea8c73a05b78af7590c604b57322637ff2bf2828)
- first pass is fast for performance, second is crytographically strong [`15e729e`](https://github.com/ImageMagick/ImageMagick6/commit/15e729edcd033360a3d16df8f5974c79f4bdeac5)
- recommend shred value of 1 for performance reasons [`4fe06ac`](https://github.com/ImageMagick/ImageMagick6/commit/4fe06ac897047d4e2e573b08015d084190c95cac)
- only set the # of shred passes one time [`fc9746a`](https://github.com/ImageMagick/ImageMagick6/commit/fc9746a351acbd3139b8446722d15e8ff42f15ba)
- if enabled, shred streams [`2987085`](https://github.com/ImageMagick/ImageMagick6/commit/2987085994d9d8aa1a2c9d92b061c4ce2c3437f4)
- unmap mapped pixels [`5316839`](https://github.com/ImageMagick/ImageMagick6/commit/531683946155f1029876852e6b251f685773c02a)
- default mapped member to false [`79d9c6c`](https://github.com/ImageMagick/ImageMagick6/commit/79d9c6c0c7e9cf2f119fa24cdc6ee1095b4a1223)
- don't shred streaming pixels [`bdd30a8`](https://github.com/ImageMagick/ImageMagick6/commit/bdd30a819918bf6f72619433d03f874bf2c5de4b)
- rework shred passes [`24d66bd`](https://github.com/ImageMagick/ImageMagick6/commit/24d66bdf3e46cf44c58f9ace9a6bde133714a6e1)
- optimize performance [`975e715`](https://github.com/ImageMagick/ImageMagick6/commit/975e715e7cc652e0a6b244cead2724a12539223a)
- eliminate compiler warning [`4466926`](https://github.com/ImageMagick/ImageMagick6/commit/4466926fd4c52d335c3b13aaee8e737f6ae8b286)
- eliminate lint warnings [`af4e64c`](https://github.com/ImageMagick/ImageMagick6/commit/af4e64ce504b84d9504043495d35edd8113f8965)
- eliminate lint warnings [`f200174`](https://github.com/ImageMagick/ImageMagick6/commit/f200174d88b0791d60333f20bcd8913c4d79d5a4)
- support date:timestamp property [`cf7dc08`](https://github.com/ImageMagick/ImageMagick6/commit/cf7dc08636a7679fbdfac7a8f7d4af0f78708578)
- eliminate lint warnings [`4f34e8d`](https://github.com/ImageMagick/ImageMagick6/commit/4f34e8d6deea256c93cabde03775c0b452a03627)
- get timestamp from image-&gt;timestamp member [`5694940`](https://github.com/ImageMagick/ImageMagick6/commit/5694940303da237c8db39b61e278ace408cbf55c)
- eliminate lint warnings [`31d21ce`](https://github.com/ImageMagick/ImageMagick6/commit/31d21ce2b1759bc0c9bcdadf9477e04d4866ca4f)
- support registry:precision define [`31c7d05`](https://github.com/ImageMagick/ImageMagick6/commit/31c7d05623682a99ba83cce14e6b7a399e3d7e18)
- need at least one policy defined [`0f0e899`](https://github.com/ImageMagick/ImageMagick6/commit/0f0e89934bd82a6768bbb8fc0dcf9eb07c52cb87)
- eliminate lint warnings [`1498305`](https://github.com/ImageMagick/ImageMagick6/commit/14983052ab96d4d738480f4e4b1b210f33a70d42)
- eliminate compiler warning [`e3595eb`](https://github.com/ImageMagick/ImageMagick6/commit/e3595ebb4b8633dc76f912706429ff8c4eed449b)
- eliminate compiler warning [`145440f`](https://github.com/ImageMagick/ImageMagick6/commit/145440f0f4c265f13691cf97780a17c218503e05)
- eliminate lint warning [`909d770`](https://github.com/ImageMagick/ImageMagick6/commit/909d77066640baf07e01932b6aa5c719c50f1ccd)
- eliminate lint warnings [`eb27aca`](https://github.com/ImageMagick/ImageMagick6/commit/eb27aca292079c8f5f7c279029c71a6ff7da5fa0)
- eliminate lint warnings [`649b0e8`](https://github.com/ImageMagick/ImageMagick6/commit/649b0e8cfd4926aec5cc7cc0c0c06ca76c364611)
- note, system:precision is deprecated [`28e2fd5`](https://github.com/ImageMagick/ImageMagick6/commit/28e2fd51dd88e0f4367b3b28cd51421c9f20ef64)
- eliminate icc compiler warnings [`6e68635`](https://github.com/ImageMagick/ImageMagick6/commit/6e6863533a0faef62c6b2d601712dfbe0dbb992a)
- Reverted incorrect patch when doing auto-orient of an image that is right-top or left-bottom. [`9e0d7b9`](https://github.com/ImageMagick/ImageMagick6/commit/9e0d7b9aca687ec2b278fa9e0137f404a3e8d99a)
- Only close the file blob when gzopen is successful. [`c5fb917`](https://github.com/ImageMagick/ImageMagick6/commit/c5fb917d4454185c7b65961a4b7ae3c74d03c87d)
- Added method to add utf8 support for gzopen on Windows. [`70c6500`](https://github.com/ImageMagick/ImageMagick6/commit/70c6500391b17560b06ae3d4eebfe6a42e1efb09)
- Only parse SOURCE_DATE_EPOCH once. [`cab56c5`](https://github.com/ImageMagick/ImageMagick6/commit/cab56c5265ea8724fb93d04fcf0ca514df1147da)
- Restored check that did not seem to be necessary. [`f12a028`](https://github.com/ImageMagick/ImageMagick6/commit/f12a028a8e597ab6a4bfcaaeb0834bc805a5052a)
- Fixed copy paste mistake. [`5f5830b`](https://github.com/ImageMagick/ImageMagick6/commit/5f5830bebcd415025460fe2b22118a44b4b3dd7f)
- Also fix incorrect fclose for bzlib. [`429a7e7`](https://github.com/ImageMagick/ImageMagick6/commit/429a7e7775e1a60bda2eb1fd68d0b9f8b0fcfc2c)
- perl_vendorarch is not longer defined [`1afd0cd`](https://github.com/ImageMagick/ImageMagick6/commit/1afd0cd42aeb1cfd0de2da91835962e9a0ea3dd6)
- fix improper close when opening zipped file [`01e6075`](https://github.com/ImageMagick/ImageMagick6/commit/01e6075a17537504d5074579d6f4de61995ea9be)
- Restored setting the file to NULL. [`21240ae`](https://github.com/ImageMagick/ImageMagick6/commit/21240ae99b822b242ce9f52ce741ced7fe3cf656)
- release [`2bc6b3c`](https://github.com/ImageMagick/ImageMagick6/commit/2bc6b3cbbbab34458ff51b5332e313385c7ae5ef)

## [6.9.12-52](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-51...6.9.12-52) - 2022-06-05

### Commits

- release [`e27754a`](https://github.com/ImageMagick/ImageMagick6/commit/e27754aed20fed12e1e5f6e7159f083947130f3c)
- don't keep in repo [`51c8fe2`](https://github.com/ImageMagick/ImageMagick6/commit/51c8fe2c68340d8be7a69d54b40e633a61b37aa4)
- beta release [`f7e9c8c`](https://github.com/ImageMagick/ImageMagick6/commit/f7e9c8c49c43fbcb0fc88f63c7c608a4054bd4e0)
- Set pass when webp:target-size or webp:target-psnr are set. [`f182990`](https://github.com/ImageMagick/ImageMagick6/commit/f182990d0b9d455d67eee01013171b5eb74afc37)
- check for zero-length blobs [`b92fb01`](https://github.com/ImageMagick/ImageMagick6/commit/b92fb01a9a7cc7f66c5f66cc19760c6db2b4b921)
- cosmetic [`0f58c10`](https://github.com/ImageMagick/ImageMagick6/commit/0f58c10811ec7dbe8ba6d31943c554fc06715794)
- Move case statement to make sure that non FloatingPointQuantumFormat will end up in the default case. [`9f248ff`](https://github.com/ImageMagick/ImageMagick6/commit/9f248ff8266aa4a88007dff558d937bd149ffa52)
- Revert to previous commit because the ImageMagick 7 verion of this file was commited by accident. [`872cc9a`](https://github.com/ImageMagick/ImageMagick6/commit/872cc9aa4bdefd04ec66b5022d79af0e2ed96b18)
- Check for zero-length blobs. [`43a7b02`](https://github.com/ImageMagick/ImageMagick6/commit/43a7b02e5ec90a6cdb990968047d26594886020d)
- Added dependabot configuration. [`9413045`](https://github.com/ImageMagick/ImageMagick6/commit/9413045a999b7ae579eaa934ef69bdc542eec7dd)
- Corrected rotation angle for right-top and left-bottom in auto-orient. [`d4ef5f8`](https://github.com/ImageMagick/ImageMagick6/commit/d4ef5f8e4e92440907091cba05e7cb9c75e1156c)
- Bump actions/upload-artifact from 1 to 3 [`bd10637`](https://github.com/ImageMagick/ImageMagick6/commit/bd10637c5dc2d8379febac3e5b17167c89c4e856)
- Bump github/codeql-action from 1 to 2 [`8b0e990`](https://github.com/ImageMagick/ImageMagick6/commit/8b0e990fd560cc982e55351226ac2048a8a9af2f)
- release [`d04b5b0`](https://github.com/ImageMagick/ImageMagick6/commit/d04b5b056b916bea1f032e24f49350fe6970787c)

## [6.9.12-51](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-50...6.9.12-51) - 2022-05-30

### Commits

- beta release [`c4073a5`](https://github.com/ImageMagick/ImageMagick6/commit/c4073a51fdacfaf26781b4aaac39e4751e11adef)
- return previous value when FX statement is null [`d6cb74d`](https://github.com/ImageMagick/ImageMagick6/commit/d6cb74d5e3f970bcb66ed49515eec02ab05ecbae)
- Corrected pragma comments due to repository renames. [`1b57081`](https://github.com/ImageMagick/ImageMagick6/commit/1b57081dfc4084118f55482e37ccad12c21d6d22)
- latest ImageMagick documentation [`68a8ce1`](https://github.com/ImageMagick/ImageMagick6/commit/68a8ce12a4bcef69799d8a9a5cf1cd7ad790d520)
- release [`e89c04d`](https://github.com/ImageMagick/ImageMagick6/commit/e89c04d318562790ea6afc45c73c8d3a8e2ea123)

## [6.9.12-50](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-49...6.9.12-50) - 2022-05-16

### Commits

- beta release [`2225cde`](https://github.com/ImageMagick/ImageMagick6/commit/2225cde3e76dbe3f1aa4cba8f4fcc3c92c2fc229)
- fix temporary file leak [`6e3cf33`](https://github.com/ImageMagick/ImageMagick6/commit/6e3cf33cac68acdadff6ce03a9d88b485c8725b0)
- release [`8bb9411`](https://github.com/ImageMagick/ImageMagick6/commit/8bb9411cd08da1cfdd68f3f9b88007202e5464ff)

## [6.9.12-49](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-48...6.9.12-49) - 2022-05-15

### Merged

- Fix various redefinition warnings in mingw [`#180`](https://github.com/ImageMagick/ImageMagick6/pull/180)
- Fix build with -Werror [`#177`](https://github.com/ImageMagick/ImageMagick6/pull/177)

### Commits

- beta release [`3f25da1`](https://github.com/ImageMagick/ImageMagick6/commit/3f25da103a2139e41d282183b8ffde22e4f09946)
- PDF to PBM no longer returning all white @ https://github.com/ImageMagick/ImageMagick/issues/5134 [`53e7f93`](https://github.com/ImageMagick/ImageMagick6/commit/53e7f93869d6975a29d0868b2b05713d691bc755)
- Test with mingw-w64 using MSYS2 CI [`05a2e00`](https://github.com/ImageMagick/ImageMagick6/commit/05a2e0039414285f36512aa38dccc632593b56d5)
- autotools: Add ws2_32 library with MagickCore for Win32 platform [`2798c67`](https://github.com/ImageMagick/ImageMagick6/commit/2798c671a8754c7efae3d9d717e48897012144f1)
- eliminate compiler warnings [`21ffed7`](https://github.com/ImageMagick/ImageMagick6/commit/21ffed7d95ab949dcdc52ee683dc0965ffd99719)
- latest autoconf/automake config [`1481259`](https://github.com/ImageMagick/ImageMagick6/commit/148125937c46616879d0fb9b59d3a699718e09d5)
- automake/autoconf update [`12bcac5`](https://github.com/ImageMagick/ImageMagick6/commit/12bcac5d47b3d0b04b15cfbbe3af28a68028cd2b)
- automake/autoconf update [`4f055aa`](https://github.com/ImageMagick/ImageMagick6/commit/4f055aa73cf8e6b6bf8e267edd040d4a82e2f08d)
- correct check for Magick++ compliance [`beb34e1`](https://github.com/ImageMagick/ImageMagick6/commit/beb34e12c70a588f16b2d57b6809d7ef85b1a733)
- automake/autoconf remove obselete macros [`e0f009a`](https://github.com/ImageMagick/ImageMagick6/commit/e0f009a8af2f6cddcf5e03e271522422a83462a7)
- set AC_PREREQ() macro [`9192794`](https://github.com/ImageMagick/ImageMagick6/commit/919279480b7e069731dbfd9eef228ede0a7431f0)
- build RPM tweaks [`520c45a`](https://github.com/ImageMagick/ImageMagick6/commit/520c45ae1753d431989cb2de169a7d6698212c53)
- tweak BZIP2 autoconf macro [`ba96c74`](https://github.com/ImageMagick/ImageMagick6/commit/ba96c74c25047731c4257db87f782d87cde883aa)
- release [`d468e47`](https://github.com/ImageMagick/ImageMagick6/commit/d468e47a8edf9c787d97b36064ae17953dfedffa)

## [6.9.12-48](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-47...6.9.12-48) - 2022-05-07

### Commits

- beta release [`79631d0`](https://github.com/ImageMagick/ImageMagick6/commit/79631d042400c496843378ed0196a4b406c4250d)
- eliminate Coverity defect [`7f9f7af`](https://github.com/ImageMagick/ImageMagick6/commit/7f9f7af4df7ae0c520c06dd607f2c4ca75f4ef23)
- eliminate Coverity defect [`65ed243`](https://github.com/ImageMagick/ImageMagick6/commit/65ed243183b20224e724b57df4988bde1b64800f)
- possible memory leak @ https://github.com/ImageMagick/ImageMagick/issues/5121 [`ca7744c`](https://github.com/ImageMagick/ImageMagick6/commit/ca7744c2cd37b11a6a0abe50761aee178027c724)
- conditional logging [`a34e365`](https://github.com/ImageMagick/ImageMagick6/commit/a34e36577496414d2f36c1e491166b72c223dcab)
- release [`d28a02b`](https://github.com/ImageMagick/ImageMagick6/commit/d28a02b076d222169f299dbaa4377f74ae071ec0)

## [6.9.12-47](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-46...6.9.12-47) - 2022-04-30

### Commits

- prep Beta release [`4731b11`](https://github.com/ImageMagick/ImageMagick6/commit/4731b113f0b6d52574ded6c97e54d90a771534d7)
- possible obscure memory leak [`3414d5d`](https://github.com/ImageMagick/ImageMagick6/commit/3414d5dad69969bff4c1377ff58a9df892c6ff6b)
- check event mask before logging [`89f4f49`](https://github.com/ImageMagick/ImageMagick6/commit/89f4f49abdfbd8bc4db32a5f47d9ac32e75df7cd)
- check event mask before logging [`ffff75a`](https://github.com/ImageMagick/ImageMagick6/commit/ffff75a362f35e5112d7bb526c4b33dd6001263f)
- Stop using %GITHUB_WORKSPACE%. [`eed696f`](https://github.com/ImageMagick/ImageMagick6/commit/eed696f455d499f489280995754724ba2f508423)
- Use version 3 of checkout. [`35b49b1`](https://github.com/ImageMagick/ImageMagick6/commit/35b49b1523ab6f2db2dc2903137fe5b5f202e52b)
- Create ChangeLog during the release and daily build. [`47600c7`](https://github.com/ImageMagick/ImageMagick6/commit/47600c7aee4a05f70910c1d46ce21371f243c148)
- Removed ChangeLog.md because we now use the generated one. [`7d85c33`](https://github.com/ImageMagick/ImageMagick6/commit/7d85c334fa9f05105b536af7f3ff5074da3e6a8f)
- Use date of latest change to m4/version.m4 instead. [`cdbb330`](https://github.com/ImageMagick/ImageMagick6/commit/cdbb330ac35dbb1c74a1c83c1b4b59aeedd1fe43)
- The default fetch-depth is 1. [`b23e10c`](https://github.com/ImageMagick/ImageMagick6/commit/b23e10c380cc24687523d2073de6a929a5f464f0)
- improve/optimize logging [`78395b3`](https://github.com/ImageMagick/ImageMagick6/commit/78395b3affd854ff8aa349e42767202d30f574a0)
- squash compuler warning [`6546dc8`](https://github.com/ImageMagick/ImageMagick6/commit/6546dc84eb4097aa82584350858f4d1d94292b8d)
- https://github.com/ImageMagick/ImageMagick/issues/5041 [`2d820fc`](https://github.com/ImageMagick/ImageMagick6/commit/2d820fc2d05aae8e508b11930c5a6b8a496033ae)
- need Changelog.md, referenced by web pages [`58d7b69`](https://github.com/ImageMagick/ImageMagick6/commit/58d7b69e46ec0139669ce73e23b2c1b3a0bd8d5c)
- latest autoconf update [`d74b07a`](https://github.com/ImageMagick/ImageMagick6/commit/d74b07a1e3b4710272ad1980b1697f2f821ab196)
- latest automake update [`9c892ad`](https://github.com/ImageMagick/ImageMagick6/commit/9c892ade2b5bf5daa4e4d07f77c0938a9cb0cd14)
- moved to website repo [`6e57f76`](https://github.com/ImageMagick/ImageMagick6/commit/6e57f765651744dabc51bb4966ccc33af3ef790c)
- optimize thumbnail resizing [`94e60b2`](https://github.com/ImageMagick/ImageMagick6/commit/94e60b24e2497693f1f799b9cf522a0c566234c3)
- revert [`969d70d`](https://github.com/ImageMagick/ImageMagick6/commit/969d70da1c478a69a6d1a30f3c171a7c8d68c812)
- endian_support should be set to true. [`c5a96e0`](https://github.com/ImageMagick/ImageMagick6/commit/c5a96e05be9dc735514d14fe81364b7310212e78)
- Sort commits by date instead. [`185002f`](https://github.com/ImageMagick/ImageMagick6/commit/185002f9227fafe944bc80a2f5f96f23761abc55)
- check for image width/height exceeding INT_MAX [`1fc9d67`](https://github.com/ImageMagick/ImageMagick6/commit/1fc9d6719844e28d9f54e9ad7ffd7e255425ac44)
- eliminate compiler exception [`78e03e7`](https://github.com/ImageMagick/ImageMagick6/commit/78e03e75320121770f9fe77da2dada58df1099bf)
- possible divide by zero [`ea5d25b`](https://github.com/ImageMagick/ImageMagick6/commit/ea5d25b3193ac568d1acd84c3e29ce0695640965)
- more informative exception message [`6a08233`](https://github.com/ImageMagick/ImageMagick6/commit/6a082331cc12f3c870bd78f5d1528b42d1313031)
- optimize logging [`3b18a98`](https://github.com/ImageMagick/ImageMagick6/commit/3b18a98dfb1e614a7a95716b8629326e4901318a)
- eliminate compiler exception [`5ab10bb`](https://github.com/ImageMagick/ImageMagick6/commit/5ab10bb85af2185525dda18e60d0a9482843319e)
- eliminate compiler warning [`7bd8a5c`](https://github.com/ImageMagick/ImageMagick6/commit/7bd8a5cc9be042f4134d9abbb094f921bd3e71f9)
- eliminate compiler exception [`2eba158`](https://github.com/ImageMagick/ImageMagick6/commit/2eba15828209d58ed289821faa79b76be1eb3a25)
- release [`9198dc5`](https://github.com/ImageMagick/ImageMagick6/commit/9198dc51522ac061e56ce0fc2c94a2712038aba4)

## [6.9.12-46](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-45...6.9.12-46) - 2022-04-23

### Commits

- https://github.com/ImageMagick/ImageMagick/issues/4973 [`629154d`](https://github.com/ImageMagick/ImageMagick6/commit/629154d99c33e09c35ed0e2cb147212c5425b6b1)
- bump revision [`657c75f`](https://github.com/ImageMagick/ImageMagick6/commit/657c75f5e25acc6c8e269b704d5ea4e9bec451e7)
- eliminate compiler warning [`ef19c70`](https://github.com/ImageMagick/ImageMagick6/commit/ef19c70f68fa38a7fef0b71b43ccc30708679e94)
- release commits [`3857531`](https://github.com/ImageMagick/ImageMagick6/commit/38575313683062227601929340acf05ceb308150)
- eliminate Coverity defects [`c5c4515`](https://github.com/ImageMagick/ImageMagick6/commit/c5c451591974b4ca4835fd394c5f1da4da6fed11)
- eliminate Coverity defect [`5051477`](https://github.com/ImageMagick/ImageMagick6/commit/50514778fd451dba26ce4bcd821e6dcac0cb702a)
- latest autoconf/automake updates [`4370511`](https://github.com/ImageMagick/ImageMagick6/commit/43705112b251248d1e23bd527fd6e13a8d8e5774)
- Added option to mark the version as beta. [`2f967eb`](https://github.com/ImageMagick/ImageMagick6/commit/2f967ebc78b66a4723d501f5e0f33f82c03952d9)
- Changed triggers for the release build. [`049e01c`](https://github.com/ImageMagick/ImageMagick6/commit/049e01cdae1adef16f9d0da2afc6731dec7606c5)
- Updated .gitignore. [`0c7d4be`](https://github.com/ImageMagick/ImageMagick6/commit/0c7d4bef12ef6499892dfd19f09a9b3c4735d4e2)
- latest autoconf update [`40c0b2c`](https://github.com/ImageMagick/ImageMagick6/commit/40c0b2c432494dcbef76db431913d5095af14dbb)
- fix rare but possible memory leak [`20b1c9f`](https://github.com/ImageMagick/ImageMagick6/commit/20b1c9f59f986c6bd62ccf89736c47cebf4c6e87)
- set threshold policy by default [`5053b93`](https://github.com/ImageMagick/ImageMagick6/commit/5053b9399eae366224843b43085598ee5e2749da)
- encourage Unicode default font [`6c68a06`](https://github.com/ImageMagick/ImageMagick6/commit/6c68a0605bc97a723e48e3b44eae0fbd50ce70c2)
- update website [`a4ec146`](https://github.com/ImageMagick/ImageMagick6/commit/a4ec14613f8693b2ee8279a70b7ca591b1ffc5dd)
- release [`2346033`](https://github.com/ImageMagick/ImageMagick6/commit/2346033ebb1bb76f7cdd04276a96397e4b436bb9)

## [6.9.12-45](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-44...6.9.12-45) - 2022-04-16

### Commits

- prep next release [`df41269`](https://github.com/ImageMagick/ImageMagick6/commit/df41269a8f39e276a0da4c5a2ad1bfc7e938c506)
- do not set ICC properties unless the value is non-null [`5988721`](https://github.com/ImageMagick/ImageMagick6/commit/598872147bfb031a7d24749d8d1b9216e5153582)
- eliminate arbitrary limit on CMS descriptions [`2c452fc`](https://github.com/ImageMagick/ImageMagick6/commit/2c452fcffdf5d0a66287b5c89a7f7f0c721e8582)
- Removed unused assignment. [`44f42c2`](https://github.com/ImageMagick/ImageMagick6/commit/44f42c2521de1f8de17a87ac89d2345235071527)
- Improved freetype error reporting. [`05d5d26`](https://github.com/ImageMagick/ImageMagick6/commit/05d5d26f6cce099ba2e43c727144bac7b303087e)
- Added missing version check. [`93bbd3a`](https://github.com/ImageMagick/ImageMagick6/commit/93bbd3a26b9de035f2578eed05db3896f418ac12)
- Revert local check. [`8126c53`](https://github.com/ImageMagick/ImageMagick6/commit/8126c53d6793c702c960e32731ea08dedf7ba5b5)
- Corrected check. [`17aa89f`](https://github.com/ImageMagick/ImageMagick6/commit/17aa89f702a61cb9aa6026eec0739e3e3ae23661)
- check for empty string not needed [`cbbcfa1`](https://github.com/ImageMagick/ImageMagick6/commit/cbbcfa180ac7c06cd518d2d7ab8d0eb2e22b50f1)
- check to see if ICC property exists before its created [`a5263ab`](https://github.com/ImageMagick/ImageMagick6/commit/a5263ab3e463729adfe714cf1435430e84995672)
- revert [`354943b`](https://github.com/ImageMagick/ImageMagick6/commit/354943bd85df291c82e74650ae007f2af1f5b2da)
- do not permit setting read-only properties (e.g. exif:*) [`98abe54`](https://github.com/ImageMagick/ImageMagick6/commit/98abe54e6b54b4cfeef90ea7a5943cf453b680a3)
- https://github.com/ImageMagick/ImageMagick/pull/5034 [`dc070da`](https://github.com/ImageMagick/ImageMagick6/commit/dc070da861a015d3c97488fdcca6063b44d47a7b)
- https://github.com/ImageMagick/ImageMagick/issues/5028 [`6dca9a7`](https://github.com/ImageMagick/ImageMagick6/commit/6dca9a7c5c99d416e86605220970f3b85064e4a6)
- https://github.com/ImageMagick/ImageMagick/issues/5027 [`6f7a9e2`](https://github.com/ImageMagick/ImageMagick6/commit/6f7a9e23d816478c0dcccea32d38cef4ab517019)
- pending release [`e8700b9`](https://github.com/ImageMagick/ImageMagick6/commit/e8700b9d02223d6e0e47c792ee293bf1989fd024)
- eliminate compiler warning [`8ca2579`](https://github.com/ImageMagick/ImageMagick6/commit/8ca2579216dfbcb3a576ae1876dd8ac9ad68edae)
- future: throw an exception if type cache cannot be acquired [`ae21b8c`](https://github.com/ImageMagick/ImageMagick6/commit/ae21b8c554681a9884a572341ea55419a51f7da1)
- eliminate Coverity defects [`dcc7a67`](https://github.com/ImageMagick/ImageMagick6/commit/dcc7a6748c41c11a7926a4af6ac18f4ceccd48e5)
- https://github.com/ImageMagick/ImageMagick/issues/5037 [`1eb8339`](https://github.com/ImageMagick/ImageMagick6/commit/1eb8339661a982ff8a1cb82f0da34fe0931afc44)
- eliminate Coverity defects [`d6ccd35`](https://github.com/ImageMagick/ImageMagick6/commit/d6ccd350830317daf252202b5daf37e8c7e19678)
- eliminate Coverity defects [`5923cb3`](https://github.com/ImageMagick/ImageMagick6/commit/5923cb343f5787e814b3bc49880b739b08ee9399)
- streaming interface must be allocated on the heap [`f2ab27b`](https://github.com/ImageMagick/ImageMagick6/commit/f2ab27b2279e982ade0d29ceaf418b3c53d3b34a)
- fix memory leak in Freetype stream [`8ead70f`](https://github.com/ImageMagick/ImageMagick6/commit/8ead70f34a83ec16c7e346c3fb105e226b27b229)
- eliminate Coverity defects [`3d50253`](https://github.com/ImageMagick/ImageMagick6/commit/3d5025390e29252b9ca9fadd43e53956b0e3e43e)
- revert [`f49d606`](https://github.com/ImageMagick/ImageMagick6/commit/f49d606db5b3b0e6a45e5fab05ef17bdf047efbf)
- revert [`8c9e882`](https://github.com/ImageMagick/ImageMagick6/commit/8c9e882635e2dad22f9bfa41b82161b1aaebd0bb)
- eliminate Coverity defect [`c64edf6`](https://github.com/ImageMagick/ImageMagick6/commit/c64edf606451d522298a4cd172d9cb652236663d)
- utilitze fstat() blocksize to set stream buffer size [`7462d84`](https://github.com/ImageMagick/ImageMagick6/commit/7462d84b7bc6076522d2763a3d507429642666df)
- revert [`65b99c4`](https://github.com/ImageMagick/ImageMagick6/commit/65b99c4dc37287a8f8c2f264da22f0066da75626)
- eliminate compiler warning [`f82bd6a`](https://github.com/ImageMagick/ImageMagick6/commit/f82bd6a040f159a60a85a36abd3e748ea9da52cf)
- eliminate Coverity defects [`f730f49`](https://github.com/ImageMagick/ImageMagick6/commit/f730f493939fbe42ae80a0b58d2777d56427e8db)
- eliminate leak in Freetype streaming interface [`980bfe2`](https://github.com/ImageMagick/ImageMagick6/commit/980bfe2047986aab0400d517827ab1761ea82733)
- prevent double free in Freetype streaming interface [`212564a`](https://github.com/ImageMagick/ImageMagick6/commit/212564a2693c2e9189d12e11a1d67907ad2cf970)
- eliminate Coverity defects [`6ef3cb2`](https://github.com/ImageMagick/ImageMagick6/commit/6ef3cb2a758a3dd806df968e89a9fd7c51fed4bd)
- fix fill-opacity special case where the fill color alpha is fully transparent [`83bd597`](https://github.com/ImageMagick/ImageMagick6/commit/83bd597344deb87274a774452145654507335690)
- eliminate coverity defects [`68fe465`](https://github.com/ImageMagick/ImageMagick6/commit/68fe465b16694f67f1e09e8c1c7fbaec396e4a41)
- release [`e2d55af`](https://github.com/ImageMagick/ImageMagick6/commit/e2d55af5bad16596e3bb43c10eb47b5bfec435c9)

## [6.9.12-44](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-43...6.9.12-44) - 2022-03-27

### Commits

- ... [`2095de7`](https://github.com/ImageMagick/ImageMagick6/commit/2095de7a1ffeb72fbb8b3dd72e70c2c23c534991)
- https://github.com/ImageMagick/ImageMagick/issues/4974 [`1f860f5`](https://github.com/ImageMagick/ImageMagick6/commit/1f860f52bd8d58737ad883072203391096b30b51)
- https://github.com/ImageMagick/ImageMagick/issues/4975 [`5eb276a`](https://github.com/ImageMagick/ImageMagick6/commit/5eb276ac65c0fbc55546ecbf5f92942f39d7d2ff)
- lastest changes [`70202da`](https://github.com/ImageMagick/ImageMagick6/commit/70202daef0dffb77a48100185724f8eac13d82c4)
- enforce one `id` per MIFF image [`ab0133d`](https://github.com/ImageMagick/ImageMagick6/commit/ab0133d9e5eefbaa8eb8050e1600be63b8734db9)
- latest changes [`34cbd5f`](https://github.com/ImageMagick/ImageMagick6/commit/34cbd5f1249944f8e96b718a9e9632b9b5ac2b2f)
- https://github.com/ImageMagick/ImageMagick/pull/4986 [`29c8abc`](https://github.com/ImageMagick/ImageMagick6/commit/29c8abce0da56b536542f76a9ddfebdaab5b2943)
- reset id [`ee32452`](https://github.com/ImageMagick/ImageMagick6/commit/ee32452ea6b54e3566a82aa60bf2a17de29b48d5)
- reset id [`e87f9fd`](https://github.com/ImageMagick/ImageMagick6/commit/e87f9fdb519be34daeed85f9d9bd98740518d53b)
- over allocate quantum pixel buffer [`db2fd39`](https://github.com/ImageMagick/ImageMagick6/commit/db2fd39c1ba4fc9da61cc874506e28f5822bd82a)
- https://github.com/ImageMagick/ImageMagick/issues/4987 [`7962da1`](https://github.com/ImageMagick/ImageMagick6/commit/7962da1bc92349f205fce473f07ab6c1dffa29e6)
- no suitable delegate utility for CGM or FIG formats [`19b1aa9`](https://github.com/ImageMagick/ImageMagick6/commit/19b1aa98f5e4ba72bf238bceb99fe2855f6dbd16)
- https://github.com/ImageMagick/ImageMagick/issues/4988 [`e6ea587`](https://github.com/ImageMagick/ImageMagick6/commit/e6ea5876e0228165ee3abc6e959aa174cee06680)
- cosmetic [`8192e98`](https://github.com/ImageMagick/ImageMagick6/commit/8192e981094a776529fd37eb1744bc265f73b89b)
- cosmetic [`dfb7339`](https://github.com/ImageMagick/ImageMagick6/commit/dfb73390fdae16eb53000574e2fdcc65e4883061)
- speculative allocation since we don't yet know the quantum type [`cf8f393`](https://github.com/ImageMagick/ImageMagick6/commit/cf8f3935cfcc97a4827fe7f60bb5b1b0de6f7eec)
- pending release [`64ad194`](https://github.com/ImageMagick/ImageMagick6/commit/64ad1943ce394c78a6884bf2064e8d03b5238e05)
- revert [`9d10d1e`](https://github.com/ImageMagick/ImageMagick6/commit/9d10d1e402c71972fbcde2fd3380c94f3ee2989b)
- set quantum extent [`9e2fbee`](https://github.com/ImageMagick/ImageMagick6/commit/9e2fbee19683fca2aca3425fdc45dab8dc4a0054)
- revert [`1811528`](https://github.com/ImageMagick/ImageMagick6/commit/1811528ecccb81cc744a9ec49e1b292edac56aa5)
- pending release [`44a7f86`](https://github.com/ImageMagick/ImageMagick6/commit/44a7f8628ef12e1acf1340cad31c8cd3ffc05d8f)
- release [`b350dd1`](https://github.com/ImageMagick/ImageMagick6/commit/b350dd13b3c748973249f9cb63e431f1e488f2fc)

## [6.9.12-43](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-42...6.9.12-43) - 2022-03-20

### Commits

- ... [`96d197f`](https://github.com/ImageMagick/ImageMagick6/commit/96d197f14932d4ba8a116e06fe306403ea1e32f1)
- https://github.com/ImageMagick/ImageMagick/issues/4927 [`594366f`](https://github.com/ImageMagick/ImageMagick6/commit/594366fd3a5268d0456c4f60c5746a9f586ab035)
- https://github.com/ImageMagick/ImageMagick/issues/4927 [`932cf02`](https://github.com/ImageMagick/ImageMagick6/commit/932cf023db383394c4ec304c95730aed631c57d2)
- no need to check for &lt; 0 [`dead6a8`](https://github.com/ImageMagick/ImageMagick6/commit/dead6a806786eb2712dd76c38e3ff75c2f94997b)
- Changed the format of MAGICK_GIT_REVISION and use this in -version. [`bd49573`](https://github.com/ImageMagick/ImageMagick6/commit/bd495730646575af3c867ed09adc8588061079ab)
- correct date format [`625ff11`](https://github.com/ImageMagick/ImageMagick6/commit/625ff113cc9acf864c56c266471829bb19439299)
- Coders: https://github.com/ImageMagick/ImageMagick/issues/4947 [`78f03b6`](https://github.com/ImageMagick/ImageMagick6/commit/78f03b619d08d7c2e0fcaccab407e3ac93c2ee8f)
- Coders: proper check for out of bounds per https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=45640 [`5468786`](https://github.com/ImageMagick/ImageMagick6/commit/5468786406b323fef6a5fe50bc56dabde3da4130)
- Coders: https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=42549 [`de6ada9`](https://github.com/ImageMagick/ImageMagick6/commit/de6ada9a068b01494bfb848024ed46942da9d238)
- Coders: eliminate compiler warnings [`ee332c5`](https://github.com/ImageMagick/ImageMagick6/commit/ee332c511445a1fb2934f40246c3c958aefd73e9)
- Pull request: https://github.com/ImageMagick/ImageMagick/pull/4963 [`450949e`](https://github.com/ImageMagick/ImageMagick6/commit/450949ed017f009b399c937cf362f0058eacc5fa)
- Coders: PS and EPS %%BoundingBox not being parsed #4961 [`2a67214`](https://github.com/ImageMagick/ImageMagick6/commit/2a67214abc2410931064b1f4e2c01f177d768edf)
- magick: support getentropy() [`d29a057`](https://github.com/ImageMagick/ImageMagick6/commit/d29a057a3689f7b944b879dee92e7d39a33bf3cc)
- build: release [`2d5e8e3`](https://github.com/ImageMagick/ImageMagick6/commit/2d5e8e387e1c6daaf45f8efd1c24ee6a53e70e01)
- getentropy() requires sys/random.h include [`005bac2`](https://github.com/ImageMagick/ImageMagick6/commit/005bac2904c18bc6f03a2ac31bdda51005411355)
- build: pending release [`775c781`](https://github.com/ImageMagick/ImageMagick6/commit/775c7817f3700514173e0655776e0d9465e93d6c)

## [6.9.12-42](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-41...6.9.12-42) - 2022-03-04

### Commits

- ... [`8f1f6c3`](https://github.com/ImageMagick/ImageMagick6/commit/8f1f6c32bfb13ac1e8b8a7ce2f59a28ef06cb18b)
- https://github.com/ImageMagick/ImageMagick/issues/4870 [`8b7b17c`](https://github.com/ImageMagick/ImageMagick6/commit/8b7b17c8fef72dab479e6ca676676d8c5e395dd6)
- https://github.com/ImageMagick/ImageMagick/issues/4876 [`52e5cc1`](https://github.com/ImageMagick/ImageMagick6/commit/52e5cc1988b15b9a6f3d7e9e3b7b72e3a346cfc9)
- ... [`4c2da37`](https://github.com/ImageMagick/ImageMagick6/commit/4c2da37f2bcc98059f44cecf304e8b3c53664bfd)
- canonical copyright notice [`1e5a283`](https://github.com/ImageMagick/ImageMagick6/commit/1e5a28310d73e9c8c29fad113c872351340595a3)
- https://github.com/ImageMagick/ImageMagick/issues/966 [`2db42a9`](https://github.com/ImageMagick/ImageMagick6/commit/2db42a9e1dde7e88dc370deb04a3be48c01dedf5)
- escape \n character [`32a4bf3`](https://github.com/ImageMagick/ImageMagick6/commit/32a4bf395e8201896c0a21f95661766bed41e470)
- https://github.com/ImageMagick/ImageMagick/issues/966 [`d9544e7`](https://github.com/ImageMagick/ImageMagick6/commit/d9544e78bfe55361b7768ddb00eb24b7f33f2137)
- https://github.com/ImageMagick/ImageMagick/issues/4888 [`ba2242d`](https://github.com/ImageMagick/ImageMagick6/commit/ba2242da46bfbd2cc4890486ff147a0113e08735)
- https://github.com/ImageMagick/ImageMagick/issues/4888 [`2eb8b86`](https://github.com/ImageMagick/ImageMagick6/commit/2eb8b8660dac0d647a7045a6af7f3e8fcca1d8f8)
- https://github.com/ImageMagick/ImageMagick/issues/966 [`bb79523`](https://github.com/ImageMagick/ImageMagick6/commit/bb795235696e2ace0f3d0b5703065a4b9a882f04)
- throw exception on reserved filename character (\xff) [`8215fc2`](https://github.com/ImageMagick/ImageMagick6/commit/8215fc2e71513877d3040fbddfd1f16ca54499a7)
- auto-generate the change log from git commit [`553ca1b`](https://github.com/ImageMagick/ImageMagick6/commit/553ca1b6e5bcc7d89af226cecfa6b6197a90a98c)
- Changed trigger for release. [`552bddd`](https://github.com/ImageMagick/ImageMagick6/commit/552bddd79749d8195cf5a1871929076adf9a479e)
- ChangeLog =&gt; ChangeLog.md [`8a6726a`](https://github.com/ImageMagick/ImageMagick6/commit/8a6726af81ac40b41e962cafa8fd014d2659d432)
- Fixed memory leak in ThumbnailImage. [`161f49b`](https://github.com/ImageMagick/ImageMagick6/commit/161f49b3b6a7d3121a566654f12916700d7f2d07)
- pending release [`4f420a4`](https://github.com/ImageMagick/ImageMagick6/commit/4f420a43ce112948baa8de9a1ba56ee7b17afb0f)
- pending release [`dad876f`](https://github.com/ImageMagick/ImageMagick6/commit/dad876ff6b5e873bc59e0661d40e157eb599fcc1)

## [6.9.12-41](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-40...6.9.12-41) - 2022-02-21

### Commits

- ... [`ba6e51f`](https://github.com/ImageMagick/ImageMagick6/commit/ba6e51f8e3b49c3d5015df5c4d152e07a37007aa)
- https://github.com/ImageMagick/ImageMagick/issues/4761 [`77d68d3`](https://github.com/ImageMagick/ImageMagick6/commit/77d68d3e554ecd0e38ceb6a3f1decf65a69362c5)
- https://github.com/ImageMagick/ImageMagick/discussions/4755 [`1e86532`](https://github.com/ImageMagick/ImageMagick6/commit/1e8653229aeea1a6731ca3632bf5963b417312ed)
- https://github.com/ImageMagick/ImageMagick/issues/4843 [`b24793c`](https://github.com/ImageMagick/ImageMagick6/commit/b24793c396083176cbf019a09847ad3ab427e240)
- ... [`cecdf6f`](https://github.com/ImageMagick/ImageMagick6/commit/cecdf6f89642589221edc543144d45c5bde71b77)
- Removed the xtrn coder. [`768f648`](https://github.com/ImageMagick/ImageMagick6/commit/768f648cce36a641b54092d78117435996c74a9a)
- Removed the xtrn coder. [`854e7be`](https://github.com/ImageMagick/ImageMagick6/commit/854e7be5f0ce94c0a431d49a1c82a9eb50916be4)
- ... [`695af8d`](https://github.com/ImageMagick/ImageMagick6/commit/695af8d4be0d25b36129d7b3fdf5a1b991216784)
- fix compiler exception under Cygwin [`32315c9`](https://github.com/ImageMagick/ImageMagick6/commit/32315c92a4e31c0b75fb88548c0bf40242f0e5f1)
- ... [`45d3733`](https://github.com/ImageMagick/ImageMagick6/commit/45d37331ef1a38712740e9bd7090fb855557b7cb)
- remove reference to ImageMagickObject [`d64a152`](https://github.com/ImageMagick/ImageMagick6/commit/d64a15289a17a9d1d9856758f2ba82b75325f370)
- remove references to ImageMagickObject [`1e63c5c`](https://github.com/ImageMagick/ImageMagick6/commit/1e63c5c2d7f2c1d5c6aba0e8935ee855656cbb46)
- ... [`757c88c`](https://github.com/ImageMagick/ImageMagick6/commit/757c88cfe941df0cff8f2fef4681bd2b665c091c)
- pending release [`fd143dc`](https://github.com/ImageMagick/ImageMagick6/commit/fd143dc849b6c191464f40e581b0abe344b6e41e)
- Raise exception when image could not be read but no exception was raised. [`3e15c68`](https://github.com/ImageMagick/ImageMagick6/commit/3e15c68efcb1e6383c93e7dfe38ba6c37e614d1b)
- Whitespace. [`b36de79`](https://github.com/ImageMagick/ImageMagick6/commit/b36de79c6cb913f4423f7eb71901d9f07946f573)
- Removed NTGhostscriptDLL and NTGhostscriptLoadDLL from the private header. [`70b7dfa`](https://github.com/ImageMagick/ImageMagick6/commit/70b7dfaf4d2f75af8b649d542d49374d6f447c11)
- Fixes for installation in a folder that contains non ASCII characters. [`e3d32a2`](https://github.com/ImageMagick/ImageMagick6/commit/e3d32a2bdb9e50ddb2fd5966c847f0726e128815)
- off-by-one fix [`d0a2bc4`](https://github.com/ImageMagick/ImageMagick6/commit/d0a2bc44117217a7619d6ade90af0f40d9321c6e)
- don't over-allocate thread-specific data [`b61069a`](https://github.com/ImageMagick/ImageMagick6/commit/b61069a33bab43a022992b3f7c81a50e06a7b45a)
- pending release [`8a8673a`](https://github.com/ImageMagick/ImageMagick6/commit/8a8673a9bc1a7b915252645f305a65f0c990b491)
- no need for conditional compile [`d5fe059`](https://github.com/ImageMagick/ImageMagick6/commit/d5fe0590573b15208f302d57e0b1c97a60e3d16d)
- rename method to TLS-moniker, thread local storage [`8860c28`](https://github.com/ImageMagick/ImageMagick6/commit/8860c28c64ae2cf5717e309325592c1ccb7cb969)
- cosmetic [`6831beb`](https://github.com/ImageMagick/ImageMagick6/commit/6831bebd3067bddc10e954fe09bc98a3e6947be7)
- cosmetic [`c02d827`](https://github.com/ImageMagick/ImageMagick6/commit/c02d827078d59950e19e169ffeb3d988d0e1185c)
- pending release [`9ce4eba`](https://github.com/ImageMagick/ImageMagick6/commit/9ce4ebad1337a10bc9d6b74bddd57ad7dc3cde70)
- pending release [`b855d8e`](https://github.com/ImageMagick/ImageMagick6/commit/b855d8ec0bb360deb7d80a14b5c1a5a1ffc47ee1)
- https://github.com/ImageMagick/ImageMagick/issues/4865 [`e6d7f78`](https://github.com/ImageMagick/ImageMagick6/commit/e6d7f782fc1b6484c52fe7fb987c06559b489726)
- pending release [`e7418d5`](https://github.com/ImageMagick/ImageMagick6/commit/e7418d54c54b4646505ba95ce6458f352a94debf)
- https://github.com/ImageMagick/ImageMagick/issues/4867 [`8c1bf89`](https://github.com/ImageMagick/ImageMagick6/commit/8c1bf8917a7a23daa6aaa03bb4293fd9ff7859a2)
- pending release [`9b99699`](https://github.com/ImageMagick/ImageMagick6/commit/9b9969944c92ccaf4fa7d34c1c258a794a1e23b9)

## [6.9.12-40](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-39...6.9.12-40) - 2022-02-15

### Commits

- ... [`4fd78b8`](https://github.com/ImageMagick/ImageMagick6/commit/4fd78b838c09c88ff3acf43a0799a002d2f873cf)
- https://github.com/ImageMagick/ImageMagick/issues/4822 [`5a76293`](https://github.com/ImageMagick/ImageMagick6/commit/5a7629343bb280a1a177818e6e40776c7484d649)
- one off when debugging [`cb6374d`](https://github.com/ImageMagick/ImageMagick6/commit/cb6374d6fe7fec6651b1d1dd4ee7ec97c662c610)
- display last debugging character [`e6a76f8`](https://github.com/ImageMagick/ImageMagick6/commit/e6a76f8bfb9a8edfbd4cdc44e79eb080f164cf71)
- alpha is never zero [`ff04a51`](https://github.com/ImageMagick/ImageMagick6/commit/ff04a51f4f89813c319f157c0aa993f36b944815)
- https://github.com/ImageMagick/ImageMagick/issues/4837 [`00e5d3a`](https://github.com/ImageMagick/ImageMagick6/commit/00e5d3a9a033182fcf704e4b1eae9e569fb85244)
- https://github.com/ImageMagick/ImageMagick/issues/4837 [`a339e1f`](https://github.com/ImageMagick/ImageMagick6/commit/a339e1f47dd09d1765e971f7e104d34a2e50785c)
- revert [`dc25885`](https://github.com/ImageMagick/ImageMagick6/commit/dc25885dfb4d516d6ef58ba77bfc47e8799acfed)
- cosmetic [`1da04da`](https://github.com/ImageMagick/ImageMagick6/commit/1da04dabe110e22954b33927567544b33e97b7a7)
- off-by-one fix [`e41e298`](https://github.com/ImageMagick/ImageMagick6/commit/e41e29898936ca76b0def5126771733e0954191e)
- fix unitialized value [`ce4d5cb`](https://github.com/ImageMagick/ImageMagick6/commit/ce4d5cb663cb3d701d63515edbeee561b71eae39)
- https://github.com/ImageMagick/ImageMagick/issues/4841 [`f5aeb09`](https://github.com/ImageMagick/ImageMagick6/commit/f5aeb0989d9889d85b2d66a106a670386872a8c6)
- off-by-one fix [`409d6db`](https://github.com/ImageMagick/ImageMagick6/commit/409d6db86bae76c8f7401dc1c09c4349b8ca8352)
- pending release [`3264d72`](https://github.com/ImageMagick/ImageMagick6/commit/3264d72944d6f2df8f80ecb3d837da1431db37a6)

## [6.9.12-39](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-38...6.9.12-39) - 2022-02-12

### Commits

- ... [`e5ab86b`](https://github.com/ImageMagick/ImageMagick6/commit/e5ab86b9f52a8452fb00099f29a51763a5b114ff)
- possible performance optimization [`1e04814`](https://github.com/ImageMagick/ImageMagick6/commit/1e04814e2e28c9a22f082b5c87cc5cf20642ad0d)
- ... [`bcf9658`](https://github.com/ImageMagick/ImageMagick6/commit/bcf9658a637a7c6993c7203382235fd3fabb7015)
- ... [`fb8b7d6`](https://github.com/ImageMagick/ImageMagick6/commit/fb8b7d60e6469c38b9c16436a7a472d57d9b8562)
- Fixed build error. [`8cb3ec3`](https://github.com/ImageMagick/ImageMagick6/commit/8cb3ec3f676b7b566f0590536894f11fac6cf8b4)
- optimize reading of XPM properties [`cd103b8`](https://github.com/ImageMagick/ImageMagick6/commit/cd103b81ca7814533192f340053b388c6825ec83)
- https://github.com/ImageMagick/ImageMagick/discussions/4813 [`666ab9a`](https://github.com/ImageMagick/ImageMagick6/commit/666ab9ad9552fac12f92d2cf53173bea3d848255)
- Removed methods that have been renamed. [`88f63de`](https://github.com/ImageMagick/ImageMagick6/commit/88f63de88c6242bfdbb669b90f44c1827f71aebf)
- Removed IsAVI check. [`6eb9f96`](https://github.com/ImageMagick/ImageMagick6/commit/6eb9f96e781996b71ead9d25182be0e84bfdb89f)
- cosmetic [`5683607`](https://github.com/ImageMagick/ImageMagick6/commit/56836073a8cc42127b265280dfb0d5dcb4bc915b)
- https://github.com/ImageMagick/ImageMagick/issues/4822 [`0977428`](https://github.com/ImageMagick/ImageMagick6/commit/097742836e252be7aba65c00877722f5eae8e851)
- ... [`e29fbed`](https://github.com/ImageMagick/ImageMagick6/commit/e29fbed480a847fd70671ffb445769cc07f87b40)
- https://github.com/ImageMagick/ImageMagick/issues/4828 [`37ac2f0`](https://github.com/ImageMagick/ImageMagick6/commit/37ac2f0185a2afc88de705937f1e1e57004aa6ba)
- prevent integer overflow [`a69648d`](https://github.com/ImageMagick/ImageMagick6/commit/a69648d9d3eb9855eeb6089a692c689581d85cff)
- Corrected UTF-16 big endian encoding. [`71e590e`](https://github.com/ImageMagick/ImageMagick6/commit/71e590ed3885ef5e2d48918809d8a3a8cfefccba)
- https://github.com/ImageMagick/ImageMagick/issues/4830 [`409d422`](https://github.com/ImageMagick/ImageMagick6/commit/409d42205927c98cbb852ca96e109716f38f04ab)
- update copyright year [`f5cb4ce`](https://github.com/ImageMagick/ImageMagick6/commit/f5cb4ce9319066b5b4740f725d9f0f8a52368be8)
- correct copyright year [`99ef124`](https://github.com/ImageMagick/ImageMagick6/commit/99ef124d080560a9df5a0c177a82c3ccc2ca6ca9)
- pending release [`002c3d7`](https://github.com/ImageMagick/ImageMagick6/commit/002c3d7c493de002eaa605ade574830e7e8d1693)

## [6.9.12-38](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-37...6.9.12-38) - 2022-02-05

### Commits

- check if image extent is NaN [`0608714`](https://github.com/ImageMagick/ImageMagick6/commit/0608714e4b8df32180359ba502990693ccfe3115)
- ... [`0ec8137`](https://github.com/ImageMagick/ImageMagick6/commit/0ec813759359a1a9f4e37a1696bb2f967c917776)
- VID images not permitted when compositing [`f4529c0`](https://github.com/ImageMagick/ImageMagick6/commit/f4529c0dcf3a8f96c438086b28fbef8338cda0b1)
- avoid deep recursion [`513854d`](https://github.com/ImageMagick/ImageMagick6/commit/513854d34c8e505207c4c4a4cb0932ef7770fa05)
- ... [`c726d86`](https://github.com/ImageMagick/ImageMagick6/commit/c726d861a67aadf697eb35b8847f6431b47dec1e)
- https://github.com/ImageMagick/ImageMagick/issues/4793 [`dd65574`](https://github.com/ImageMagick/ImageMagick6/commit/dd655741bb71f7a129757fc0676e8aa328b44dad)
- Corrected setting delay. [`bd7f6d7`](https://github.com/ImageMagick/ImageMagick6/commit/bd7f6d781953b415e7d5f4830feebbe87a54e62f)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=44401 [`e94e616`](https://github.com/ImageMagick/ImageMagick6/commit/e94e616aff39358e09d6ae3180baf3cb59923690)
- https://github.com/ImageMagick/ImageMagick/issues/4807 [`bcbcfeb`](https://github.com/ImageMagick/ImageMagick6/commit/bcbcfeb3b697e8ec1a105dc7c7099f5f9191f172)
- reference https://github.com/ImageMagick/ImageMagick/issues/4807 [`f2ee9a7`](https://github.com/ImageMagick/ImageMagick6/commit/f2ee9a74d52794b4ef9e62e71d4906d5cab9ef27)
- pending release [`fa0b758`](https://github.com/ImageMagick/ImageMagick6/commit/fa0b758566ef994436fc9d9c14b68b433e2dd513)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=44424 [`bbf05a3`](https://github.com/ImageMagick/ImageMagick6/commit/bbf05a3449db3555cc05f4f3cacf172d6a0d35cc)
- release [`b5bb28a`](https://github.com/ImageMagick/ImageMagick6/commit/b5bb28a0ca2e53b668e4057a0cb04166ef781793)

## [6.9.12-37](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-36...6.9.12-37) - 2022-01-29

### Commits

- bump patch level version [`e662b69`](https://github.com/ImageMagick/ImageMagick6/commit/e662b69dd2cb3209339aff3c277493ef18f72a92)
- check for excessive color name length [`1025a9b`](https://github.com/ImageMagick/ImageMagick6/commit/1025a9b0373dd194fc4529424e80396f35b1bbf4)
- restore MPRI URI [`d624f7f`](https://github.com/ImageMagick/ImageMagick6/commit/d624f7f008450eded4f006517e3275647eb69864)
- pending release [`f0b31c1`](https://github.com/ImageMagick/ImageMagick6/commit/f0b31c169c00ad9e688b89e6a17e2678cc91c733)
- permit compositing MPRI images [`4dd4d0d`](https://github.com/ImageMagick/ImageMagick6/commit/4dd4d0df449acb13fb859041b4996af58243e352)
- pending release [`f1e0995`](https://github.com/ImageMagick/ImageMagick6/commit/f1e09958774501f6e39e4b06deed0c351b8158ca)

## [6.9.12-36](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-35...6.9.12-36) - 2022-01-28

### Commits

- It's a new dawn; It's a new day; It's a new life; For ImageMagick [`49ea804`](https://github.com/ImageMagick/ImageMagick6/commit/49ea804be9295c12b457843271042e2e3521750e)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=43967 [`f5f594a`](https://github.com/ImageMagick/ImageMagick6/commit/f5f594abe588bcc6ee870998bc801ede67e5b8b5)
- Added missing version check. [`9cfea23`](https://github.com/ImageMagick/ImageMagick6/commit/9cfea235600550f02b2df61c276c438ab031441e)
- ... [`1ac7d3d`](https://github.com/ImageMagick/ImageMagick6/commit/1ac7d3da9c45ee15ef7421d3ae62943f72f3cdab)
- check for excessive memory request when drawing [`50aeffe`](https://github.com/ImageMagick/ImageMagick6/commit/50aeffee5b880716bc3fbca6edf990a853b04a4d)
- https://github.com/ImageMagick/ImageMagick/issues/4766 [`77fc0b9`](https://github.com/ImageMagick/ImageMagick6/commit/77fc0b952bf505ff10b5abb94b33206f31056e06)
- promote blocksize from int to ssize_t [`ba2e0ef`](https://github.com/ImageMagick/ImageMagick6/commit/ba2e0efa42a0ac656fa4b01beb6500915ee11bcd)
- pending release [`fca98f0`](https://github.com/ImageMagick/ImageMagick6/commit/fca98f0ad524641afd5f0c4bf42852ebaf8c1c27)
- https://github.com/ImageMagick/ImageMagick/issues/4771 [`8e326c6`](https://github.com/ImageMagick/ImageMagick6/commit/8e326c63f27c544e1dbbb1a329256306e93f1a70)
- pending release [`fee44f7`](https://github.com/ImageMagick/ImageMagick6/commit/fee44f7b445cdca56a5ec19a2878608a511098c9)
- PDF unicode title [`bf36be4`](https://github.com/ImageMagick/ImageMagick6/commit/bf36be46887cdc65c8add8c6bfed20a0c4ae290d)
- pending release [`44065d3`](https://github.com/ImageMagick/ImageMagick6/commit/44065d3e7ede7012ab32bb560d838eed9507720d)

## [6.9.12-35](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-34...6.9.12-35) - 2022-01-22

### Commits

- ... [`e8b78e7`](https://github.com/ImageMagick/ImageMagick6/commit/e8b78e7bae67150667f3037932d0b3f1bc00434d)
- improved fix for possible DoS for certain SVG constructs [`84ec305`](https://github.com/ImageMagick/ImageMagick6/commit/84ec30550c3146f525383f18a786a6bbd5028a93)
- cosmetic [`623e681`](https://github.com/ImageMagick/ImageMagick6/commit/623e6813fcfe68729d78cc27b4d9bc77a678c760)
- Removed comment. [`f5bac9b`](https://github.com/ImageMagick/ImageMagick6/commit/f5bac9b20849fc7c540550e15f3ae839faf506fb)
- Fixed Windows build. [`e838900`](https://github.com/ImageMagick/ImageMagick6/commit/e838900d9380feba6900adc7537eea852cd478d5)
- Added checks for invalid PSD channel size. [`e26d718`](https://github.com/ImageMagick/ImageMagick6/commit/e26d718edaf73793c7a0f2f609ecf662fcccd562)
- permit 4GB blocks [`23b4299`](https://github.com/ImageMagick/ImageMagick6/commit/23b42998f5b3345d1915d4222cc2e858badca639)
- https://github.com/ImageMagick/ImageMagick/issues/4629 [`dea9fb3`](https://github.com/ImageMagick/ImageMagick6/commit/dea9fb319c9f4564662e0f1705856854aec01605)
- https://github.com/ImageMagick/ImageMagick/issues/4639 [`2318bfb`](https://github.com/ImageMagick/ImageMagick6/commit/2318bfb4009f8742b4c09007f3c8ba72bac7bf89)
- Fixed possible memory leak. [`e5bee23`](https://github.com/ImageMagick/ImageMagick6/commit/e5bee2335ec13cff0171e9517f862298bb7f0c0a)
- https://github.com/ImageMagick/ImageMagick/issues/4654 [`aee3f00`](https://github.com/ImageMagick/ImageMagick6/commit/aee3f004aa62bafb20dcb7c7c0675ee7d5bf9255)
- Use same checks as in IM7. [`a93c000`](https://github.com/ImageMagick/ImageMagick6/commit/a93c000f4585e9ef3b0a8a8f55bdcc25575e21b7)
- Build ImageMagick on Windows with VisualStudio 2022 instead. [`a9b405b`](https://github.com/ImageMagick/ImageMagick6/commit/a9b405b9e1bd219351d8961c9ccfddbc2a299d3a)
- Allow workflow dispatch. [`809c4ce`](https://github.com/ImageMagick/ImageMagick6/commit/809c4cefefea926887e17f63093a98223c62d857)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=43390 [`2ff94fa`](https://github.com/ImageMagick/ImageMagick6/commit/2ff94fab76c89707ed241d3a85e3881d88d1b032)
- Changed the build of configure to 64-bit. [`f5cb4bb`](https://github.com/ImageMagick/ImageMagick6/commit/f5cb4bb894806c595b08591f7ff755caed117fe6)
- https://github.com/ImageMagick/ImageMagick/issues/4679 [`8854349`](https://github.com/ImageMagick/ImageMagick6/commit/88543494464bf94ef3430ba33bb34c62ba5050d6)
- https://github.com/ImageMagick/ImageMagick/issues/4681 [`21bddc2`](https://github.com/ImageMagick/ImageMagick6/commit/21bddc28dcc31dde7d23b25009e1efbedcbae174)
- eliminate rare memory leak [`cf21bd4`](https://github.com/ImageMagick/ImageMagick6/commit/cf21bd4a4dd173a156c529082b6eb074c6aced71)
- revert [`dada640`](https://github.com/ImageMagick/ImageMagick6/commit/dada640f2732a4ae8e524ac95c1b998cf0102a80)
- ... [`a4d1e39`](https://github.com/ImageMagick/ImageMagick6/commit/a4d1e399130e50698cb1210e95224f7cd301ba8d)
- revert [`46859fd`](https://github.com/ImageMagick/ImageMagick6/commit/46859fda719f814ec7e1fbbc37ed66b6706d4094)
- ... [`bbb86a2`](https://github.com/ImageMagick/ImageMagick6/commit/bbb86a2c59fabc73d0262c70ae71ce80a89b4c5e)
- https://github.com/ImageMagick/ImageMagick/issues/4704 [`25c9e4d`](https://github.com/ImageMagick/ImageMagick6/commit/25c9e4df716f34519d346369892b030ee5155312)
- ... [`f7a43f3`](https://github.com/ImageMagick/ImageMagick6/commit/f7a43f3552a6f47a1258a524ec8ed33250601839)
- https://github.com/ImageMagick/ImageMagick/issues/4660 [`fd1df0b`](https://github.com/ImageMagick/ImageMagick6/commit/fd1df0b69806c4d820c277759b5171795502dd70)
- https://github.com/ImageMagick/ImageMagick/issues/4704 [`9002280`](https://github.com/ImageMagick/ImageMagick6/commit/90022807243230deea06b9dcc874d2a41c611631)
- eliminate C++ compiler warnings [`08dd651`](https://github.com/ImageMagick/ImageMagick6/commit/08dd6515f47bf4276797b46b9c81e016c7c46993)
- fuzzy equality check [`0256b55`](https://github.com/ImageMagick/ImageMagick6/commit/0256b550e7fd2bcec82802f4c349f6e64ad1d06a)
- zero papersize geometry [`4382359`](https://github.com/ImageMagick/ImageMagick6/commit/4382359ee5d87266c25646f68da20d4229d771bd)
- AVIF is supported by the HEIC coder [`2287dca`](https://github.com/ImageMagick/ImageMagick6/commit/2287dca493099e423ca751bf55a3f114fc848a96)
- pending release [`aff974e`](https://github.com/ImageMagick/ImageMagick6/commit/aff974eb0da8eaee7edf3acbe945a2d8bb4a4c8e)
- Added move to use the installed version of Strawberry Perl instead. [`d68e6fa`](https://github.com/ImageMagick/ImageMagick6/commit/d68e6faf1d817c9b4db97b1643226dfce2a90dfc)
- pending release [`d02bc00`](https://github.com/ImageMagick/ImageMagick6/commit/d02bc0072070ef2f33ee6d8acca436a720b9861b)

## [6.9.12-34](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-33...6.9.12-34) - 2021-12-22

### Commits

- ... [`39b8934`](https://github.com/ImageMagick/ImageMagick6/commit/39b8934f42179a4a79b41d3fa141b8fac7064ea2)
- ... [`8093989`](https://github.com/ImageMagick/ImageMagick6/commit/8093989a6bf0ea36a2e81d61400e47c9cdba3032)
- Set the colorspace after the width and height of the image have been checked. [`3fd8496`](https://github.com/ImageMagick/ImageMagick6/commit/3fd8496d027b4b03e622cbf093e0b28d1e30d4ac)
- Corrected method call. [`05259b5`](https://github.com/ImageMagick/ImageMagick6/commit/05259b51165aa26f9ec265e201315391a5a958b4)
- check for unbalanced parenthesis [`6fdd03b`](https://github.com/ImageMagick/ImageMagick6/commit/6fdd03b7fef68cfdb1c0f87d5e0e72a29f2d0336)
- https://github.com/ImageMagick/ImageMagick/issues/4626 [`c10351c`](https://github.com/ImageMagick/ImageMagick6/commit/c10351c16b8d2cabd11d2627a02de522570f6ceb)
- pending release [`0b0cbf7`](https://github.com/ImageMagick/ImageMagick6/commit/0b0cbf7b0f5c2ddcd41c85fc2da64d4771f80018)

## [6.9.12-33](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-32...6.9.12-33) - 2021-12-18

### Commits

- ... [`3deb899`](https://github.com/ImageMagick/ImageMagick6/commit/3deb89958f6787deca910570ff5fb8d27210b554)
- https://github.com/ImageMagick/ImageMagick/security/code-scanning/31 [`094e143`](https://github.com/ImageMagick/ImageMagick6/commit/094e143714873a2903093ea6c128af267ef8c997)
- revert [`7cbce51`](https://github.com/ImageMagick/ImageMagick6/commit/7cbce514e6a0f530b5f50b960f6d95c62c9416f5)
- Improved adjustment of page offset when resizing an image. [`accf336`](https://github.com/ImageMagick/ImageMagick6/commit/accf33670091ef833b45ef5bb913812e16469333)
- Corrected the built-in video encoder and decoder. [`91320cc`](https://github.com/ImageMagick/ImageMagick6/commit/91320cc53f6c5e8b59b5e22e0042d62b230344ba)
- improved adjustment of page offset when resizing an image [`c8bb427`](https://github.com/ImageMagick/ImageMagick6/commit/c8bb4278eb7be195cc45ba08e617987cf34dad1e)
- https://github.com/ImageMagick/ImageMagick/issues/4558 [`fb428af`](https://github.com/ImageMagick/ImageMagick6/commit/fb428af466701e487cfd0f657c78e1f74da4c12b)
- Corrected method name. [`15aadb7`](https://github.com/ImageMagick/ImageMagick6/commit/15aadb7691a3a8cd47cbbae9ca3ec58c01acc3c3)
- Swapped the Sync8BimProfile and the SyncExifProfile methods. [`77b718c`](https://github.com/ImageMagick/ImageMagick6/commit/77b718c3f5d5e39710d227f2bb6a7fb65abd4c57)
- Corrected typecast. [`87ce0d8`](https://github.com/ImageMagick/ImageMagick6/commit/87ce0d8fa8446b142938f1be63cf3e6b866697cf)
- Also sync the exif profile inside the 8bim profile. [`3be80bc`](https://github.com/ImageMagick/ImageMagick6/commit/3be80bc9c9b5e49a6266b680e38d39d5ecaeaadb)
- Restored debug message. [`2ab41fb`](https://github.com/ImageMagick/ImageMagick6/commit/2ab41fbf336faf0fbb9d3217b72c6f6336b7767b)
- https://github.com/ImageMagick/ImageMagick/issues/4587 [`526a3d1`](https://github.com/ImageMagick/ImageMagick6/commit/526a3d19790b753e4d7f63515dc667a3472f9eda)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=42504 [`9f7310b`](https://github.com/ImageMagick/ImageMagick6/commit/9f7310b7a3c80f132c548ffb8f29eea7dabae8c2)
- ... [`add9cb1`](https://github.com/ImageMagick/ImageMagick6/commit/add9cb14e14eef02806715d97abcf5d04a3e55dd)
- pending release [`a518f31`](https://github.com/ImageMagick/ImageMagick6/commit/a518f310bc77991712a53f6984f9f0edce706174)

## [6.9.12-32](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-31...6.9.12-32) - 2021-12-04

### Commits

- ... [`60be1a6`](https://github.com/ImageMagick/ImageMagick6/commit/60be1a6c9698fc970c087b5384da19829b8fb386)
- https://github.com/ImageMagick/ImageMagick/issues/4501 [`fa5c3aa`](https://github.com/ImageMagick/ImageMagick6/commit/fa5c3aa6c111b8c4c83d945e992da95200dbdba6)
- revert memory leak patch [`e735d88`](https://github.com/ImageMagick/ImageMagick6/commit/e735d88c251a4c7ef60c39ae3322fc7b4cbb50f9)
- https://github.com/ImageMagick/ImageMagick/issues/4501 [`936332e`](https://github.com/ImageMagick/ImageMagick6/commit/936332e6b6a5e6105f02b2d9232bcbeafa681eb3)
- https://github.com/ImageMagick/ImageMagick/issues/4501 [`2a29e35`](https://github.com/ImageMagick/ImageMagick6/commit/2a29e35480271e14a0961492867e9d246e64cc05)
- eliminate compiler warning [`63f5b43`](https://github.com/ImageMagick/ImageMagick6/commit/63f5b4329181e70cff1a646229dc3b3ba5a40d69)
- pending release [`be1bc1d`](https://github.com/ImageMagick/ImageMagick6/commit/be1bc1d9650b4530a037d7c2d58d1a5a4b73f04e)
- ... [`c611e8f`](https://github.com/ImageMagick/ImageMagick6/commit/c611e8f5102bbcf20ac0a4fd3e7e719779c60fd9)
- ASAN returns false positives for OMP [`976dba6`](https://github.com/ImageMagick/ImageMagick6/commit/976dba67f1a4352d838a2a9f823812892f8230b5)
- pending release [`3bf73bf`](https://github.com/ImageMagick/ImageMagick6/commit/3bf73bf7e3f846dd6d3e20b843e8a34e8f4f7589)
- pending release [`9e8e460`](https://github.com/ImageMagick/ImageMagick6/commit/9e8e460e7ef26ab6f5666c7292f7b82752a09b7d)
- https://github.com/ImageMagick/ImageMagick/issues/4512 [`4c0fcf3`](https://github.com/ImageMagick/ImageMagick6/commit/4c0fcf39fd51f2c89832767e1befaeda7ff86097)
- pending release [`1832b1d`](https://github.com/ImageMagick/ImageMagick6/commit/1832b1d334ca00e66ad6ff5f115750692cb6b3b7)
- Added check for invalid size. [`94f76dd`](https://github.com/ImageMagick/ImageMagick6/commit/94f76dd2f760241bec51e7d66873e77a58d812ba)
- https://github.com/ImageMagick/ImageMagick/issues/4535 [`9a7d07d`](https://github.com/ImageMagick/ImageMagick6/commit/9a7d07d8b22098210a47cabb99cb58de599bb5ba)
- Added missing checks for the return value of the exr methods. [`5beeab8`](https://github.com/ImageMagick/ImageMagick6/commit/5beeab8a1297dbae1f05f88aeffe26278b744a6f)
- close input file if early exit on exception [`fd51385`](https://github.com/ImageMagick/ImageMagick6/commit/fd513853ac20e6ae784a795fff41cacfe8b54e73)
- https://github.com/ImageMagick/ImageMagick/discussions/4529 [`e35c98c`](https://github.com/ImageMagick/ImageMagick6/commit/e35c98c5ab111284b198d0022ed479d0e6ecef3c)
- pending release [`b5525d6`](https://github.com/ImageMagick/ImageMagick6/commit/b5525d640ea48befa9cfb4e154672d4076f06aec)

## [6.9.12-31](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-30...6.9.12-31) - 2021-11-21

### Commits

- eliminate possible divide by zero [`8c80027`](https://github.com/ImageMagick/ImageMagick6/commit/8c80027ca8d6c84c3ed815059bbf353eb8dc2d58)
- ... [`9e6a637`](https://github.com/ImageMagick/ImageMagick6/commit/9e6a63782e4d22786b82b1db6575181724fdb4f1)
- Removed unnecessary define. [`6722a79`](https://github.com/ImageMagick/ImageMagick6/commit/6722a798f2b4385a293555675be8967890448b38)
- Corrected OpenCL define checks. [`149fb8a`](https://github.com/ImageMagick/ImageMagick6/commit/149fb8a345ccb58cc70d3252be5d0f7cf6850d64)
- pending release [`4976493`](https://github.com/ImageMagick/ImageMagick6/commit/49764932cdb7e0ac966828ce15a819d85ccbeae3)

## [6.9.12-30](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-29...6.9.12-30) - 2021-11-20

### Commits

- ... [`3b2a005`](https://github.com/ImageMagick/ImageMagick6/commit/3b2a005a5a58698d9cb99e48d46ce19d19abfd39)
- https://github.com/ImageMagick/ImageMagick6/issues/168 [`9a70911`](https://github.com/ImageMagick/ImageMagick6/commit/9a70911bc8b3c6f3a49bb54766cfba0e69f2a2fe)
- https://github.com/ImageMagick/ImageMagick6/issues/168 [`7599dd9`](https://github.com/ImageMagick/ImageMagick6/commit/7599dd92e8ad19993a2eb27a2b5103d853bce57f)
- mitigate UBSAN alerts [`1219eac`](https://github.com/ImageMagick/ImageMagick6/commit/1219eac5d3bfb796753597f37412df567f629c08)
- mitigate UBSAN alerts [`99841ed`](https://github.com/ImageMagick/ImageMagick6/commit/99841edc96458bad24754b587de79693da67224b)
- mitigate UBSAN alerts [`a4dec0c`](https://github.com/ImageMagick/ImageMagick6/commit/a4dec0cbdeb1ed2acf79e8efe664cdb2348e524b)
- destroy image list rather than just the first image [`c42cd7c`](https://github.com/ImageMagick/ImageMagick6/commit/c42cd7c143e501aff4d624a2591e7f26ee5d5ce9)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=41172 [`5f77de4`](https://github.com/ImageMagick/ImageMagick6/commit/5f77de42c37c184e6db6bbbad52a34070c5a7a2d)
- https://github.com/ImageMagick/ImageMagick/issues/4495 [`d46d0c6`](https://github.com/ImageMagick/ImageMagick6/commit/d46d0c647aa67bcfffec5dbd456c24b9c66de66e)
- check for NULL index channel [`f63a211`](https://github.com/ImageMagick/ImageMagick6/commit/f63a2117ba05da426d996c0aee92e5b0c7b1f852)
- check if indexes are null [`23bd057`](https://github.com/ImageMagick/ImageMagick6/commit/23bd0570ebb0b845aa62e0c66dd7d822594201ea)
- eliminate compiler warning [`7864d48`](https://github.com/ImageMagick/ImageMagick6/commit/7864d48ddb52c490484a890eea21717cab01c61c)
- check for NULL indexes [`3644f40`](https://github.com/ImageMagick/ImageMagick6/commit/3644f40f41d1bf1134e1d6fcd1f227436d045945)
- check for NULL indexes [`e008625`](https://github.com/ImageMagick/ImageMagick6/commit/e00862551327e0b2c4362d6d8f1b78bb4f3496af)
- pending release [`506ae2c`](https://github.com/ImageMagick/ImageMagick6/commit/506ae2c2e2d4bbb07d4ba4075d06aadccbc675fd)
- less aggressive sanity check [`dda7d0b`](https://github.com/ImageMagick/ImageMagick6/commit/dda7d0bb7d4f675f652fea20dff66778fb2bc88b)
- pending release [`1864067`](https://github.com/ImageMagick/ImageMagick6/commit/1864067f7083a965bc4c4f3ac36ab6976d80a831)

## [6.9.12-29](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-28...6.9.12-29) - 2021-11-14

### Commits

- ... [`c66229f`](https://github.com/ImageMagick/ImageMagick6/commit/c66229fb1a73213f392752050d49084d32032aec)
- latest docs [`f624d40`](https://github.com/ImageMagick/ImageMagick6/commit/f624d406e79ce1d5f600a1ff569bf02d6eccf4b2)
- Use CheckMergedImageAlpha when layer size is zero. [`b614db7`](https://github.com/ImageMagick/ImageMagick6/commit/b614db76102d0f4c38149d2b6c63e091bc975b6b)
- ... [`4efb23e`](https://github.com/ImageMagick/ImageMagick6/commit/4efb23ee93a2026434e5b0253ddb9c3622c1b1ab)
- pending release [`4dbdd3b`](https://github.com/ImageMagick/ImageMagick6/commit/4dbdd3bd7d4cb95bc883010d70d0e31d69308536)
- ... [`8867bad`](https://github.com/ImageMagick/ImageMagick6/commit/8867bada8703071aa5356240d677b2ac1069ff3e)
- ... [`04c02b3`](https://github.com/ImageMagick/ImageMagick6/commit/04c02b3ad4ae57a28c87a094fd72f153b6dc49bb)
- Corrected detection of the CMYK colorspace. [`af56076`](https://github.com/ImageMagick/ImageMagick6/commit/af56076082b5703d65f754a501876d082743a0ab)
- Improved detection of %%. [`cddc5be`](https://github.com/ImageMagick/ImageMagick6/commit/cddc5be6a7150e9c47fd155b402fc896e1d9d0b6)
- early exit on exception [`b272aca`](https://github.com/ImageMagick/ImageMagick6/commit/b272acab91444f2115099fe51ee6c91bb4db5d50)
- https://github.com/ImageMagick/ImageMagick/issues/4452 [`ba084f6`](https://github.com/ImageMagick/ImageMagick6/commit/ba084f6bda2edbacf1df824bb214728234ffaa86)
- pending release [`efe0cae`](https://github.com/ImageMagick/ImageMagick6/commit/efe0caec013e87837c29a83e57e5ea7397ce8645)

## [6.9.12-28](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-27...6.9.12-28) - 2021-10-29

### Commits

- ... [`dd1dc33`](https://github.com/ImageMagick/ImageMagick6/commit/dd1dc3392ee1ec775f9d53d2fe306e458dadaef2)
- ... [`e10fc76`](https://github.com/ImageMagick/ImageMagick6/commit/e10fc76ab4c7850547271a73d1b1c7ebebb691be)
- Fix stack overflow when parsing malicious ps image file. [`f74b2b1`](https://github.com/ImageMagick/ImageMagick6/commit/f74b2b19d13df6b61b5ede33aa7249dcb0f496a5)
- cosmetic [`d480691`](https://github.com/ImageMagick/ImageMagick6/commit/d480691c7d0ad3f16ff94148e781cbaff05ed1be)
- pending release [`af2ee30`](https://github.com/ImageMagick/ImageMagick6/commit/af2ee30d2201829812864d7d8aadee0e46cd5d91)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=40451 [`ba7e11c`](https://github.com/ImageMagick/ImageMagick6/commit/ba7e11c5ea554317c28977ff6e5afc4f050a7ae1)
- pending release [`f59af4f`](https://github.com/ImageMagick/ImageMagick6/commit/f59af4f713acf87b7279e68c01ac9579fea8793a)
- pending release [`0ca0004`](https://github.com/ImageMagick/ImageMagick6/commit/0ca000449de02d87e3fccba10255472417a4d3dc)
- ... [`4b5c30c`](https://github.com/ImageMagick/ImageMagick6/commit/4b5c30c0b879dc4c670c27f53721df60896724c2)
- pending release [`1898d52`](https://github.com/ImageMagick/ImageMagick6/commit/1898d52023601f8ea5bdb583f9dd2b3a435572cb)

## [6.9.12-27](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-26...6.9.12-27) - 2021-10-25

### Commits

- ... [`60fcc24`](https://github.com/ImageMagick/ImageMagick6/commit/60fcc24991c45628286b8a88ccd5983d4979626d)
- pending release [`b6fe79f`](https://github.com/ImageMagick/ImageMagick6/commit/b6fe79f95ebd91a0439cbb7adb4602c4d4aa154e)

## [6.9.12-26](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-25...6.9.12-26) - 2021-10-24

### Commits

- :1 [`cc76510`](https://github.com/ImageMagick/ImageMagick6/commit/cc765107a9c7e19607e7fd18feb89a22a563ebb4)
- ... [`c4b9474`](https://github.com/ImageMagick/ImageMagick6/commit/c4b94746cb97fc81b0b552e14f4e462449e567b5)
- Corrected versions in ChangeLog. [`7e972cc`](https://github.com/ImageMagick/ImageMagick6/commit/7e972cc7157ddaf638c8301945058970af0c114f)
- Correct more version numbers. [`b0a8b26`](https://github.com/ImageMagick/ImageMagick6/commit/b0a8b2655487ee5b6248897e5c955b8a44bfc790)
- https://github.com/ImageMagick/ImageMagick/issues/4372 [`2466e9a`](https://github.com/ImageMagick/ImageMagick6/commit/2466e9a94e42b2511ef7016259a72a714808f9fe)
- eliminate compiler warning [`8afbdbc`](https://github.com/ImageMagick/ImageMagick6/commit/8afbdbc36fe128383b4fce3374c080ac34177b15)
- https://github.com/ImageMagick/ImageMagick/issues/4378 [`c661299`](https://github.com/ImageMagick/ImageMagick6/commit/c661299cd1ff36d8783641cb4cffdffb0fd9041d)
- https://github.com/ImageMagick/ImageMagick/issues/4379 [`199a858`](https://github.com/ImageMagick/ImageMagick6/commit/199a8586fd1ab273b25dae3f75ff131f4b302ceb)
- ... [`6fe9741`](https://github.com/ImageMagick/ImageMagick6/commit/6fe9741ec186b9893bc87d39e83d0d705fe0fad5)
- adjust metrics is no longer sensitive to gravity [`6dc9251`](https://github.com/ImageMagick/ImageMagick6/commit/6dc9251f0dcc11d29dbb90f430431b553df46f35)
- test release [`01e79c2`](https://github.com/ImageMagick/ImageMagick6/commit/01e79c207608bb7eacd4b6710663213773684dcd)
- fix stack overflow when parsing malicious tiff image [`85a370c`](https://github.com/ImageMagick/ImageMagick6/commit/85a370c79afeb45a97842b0959366af5236e9023)
- pending release [`fd247de`](https://github.com/ImageMagick/ImageMagick6/commit/fd247de75a1f271474294cc97c09f291e58f2be3)
- ... [`7671137`](https://github.com/ImageMagick/ImageMagick6/commit/76711376db504e9c786426e9381021889b00590e)
- pending release [`adf4467`](https://github.com/ImageMagick/ImageMagick6/commit/adf446722724ea7cad8ebc6046e87df82aae4f05)
- slight performance optimization [`627cf43`](https://github.com/ImageMagick/ImageMagick6/commit/627cf4307b93d5185fe877db8ebb51236043f350)
- Revert adjustment of the y1 value [`122366e`](https://github.com/ImageMagick/ImageMagick6/commit/122366e570731f71c90e82f219c43d78864597a3)
- revert optimization [`07c8384`](https://github.com/ImageMagick/ImageMagick6/commit/07c838431ab2cd620daf1d43e35f8a3f0b23b7a5)
- pending release [`a85dee3`](https://github.com/ImageMagick/ImageMagick6/commit/a85dee3187419ab8c8dc1385b0be9bd9c51c731c)
- https://oss-fuzz.com/testcase-detail/6308942275805184 [`5c82207`](https://github.com/ImageMagick/ImageMagick6/commit/5c822075c884a488242d8d5558964a087cc9db99)
- pending release [`3430fb8`](https://github.com/ImageMagick/ImageMagick6/commit/3430fb87b5714e3d50717497be71a0531600da76)
- pending release [`175f33e`](https://github.com/ImageMagick/ImageMagick6/commit/175f33e13311562f51ae7b1631af65bb0ee29676)

## [6.9.12-25](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-24...6.9.12-25) - 2021-10-10

### Commits

- ... [`cfcd23e`](https://github.com/ImageMagick/ImageMagick6/commit/cfcd23ee92152228ba36ac12d6fc0a6ec34d41c0)
- https://github.com/ImageMagick/ImageMagick/discussions/4311 [`f6fdd03`](https://github.com/ImageMagick/ImageMagick6/commit/f6fdd03216d401b7e3b558218f7805b61d2cecc5)
- ... [`24961a9`](https://github.com/ImageMagick/ImageMagick6/commit/24961a9e25ac31b7ddd42eb8f1c130717971da16)
- https://github.com/ImageMagick/ImageMagick/issues/4314 [`c8bba5b`](https://github.com/ImageMagick/ImageMagick6/commit/c8bba5bf458c63486417c6f0084ce383c89d78b1)
- don't adjust metrics if gravity is undefined [`79c537c`](https://github.com/ImageMagick/ImageMagick6/commit/79c537c7bdfe0f71b4354ace4d9c9976c29b4c4a)
- Moved using namespace std after ImageMagick header files to fix issues when enabling ISO C++ 17 and ISO C17 [`2c96ab5`](https://github.com/ImageMagick/ImageMagick6/commit/2c96ab5d098fcf3d2002378355bc2ad3eaccaddf)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=39708 [`5569c6c`](https://github.com/ImageMagick/ImageMagick6/commit/5569c6cc38ea99d9cba667deaddf09ba1ec42005)
- fix ANSI compiler error [`94119fe`](https://github.com/ImageMagick/ImageMagick6/commit/94119febc83c74913017289e5060e1e5ccf378d4)
- ... [`48e52d0`](https://github.com/ImageMagick/ImageMagick6/commit/48e52d0ef0ce365a5a6e7c4d20cff582be835786)
- pending release [`af67f12`](https://github.com/ImageMagick/ImageMagick6/commit/af67f1234b95fcad2fc28560fb8136defc16108a)

## [6.9.12-24](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-23...6.9.12-24) - 2021-10-03

### Commits

- ... [`f4277c4`](https://github.com/ImageMagick/ImageMagick6/commit/f4277c460e804659535de8e2d8dd9507ab50bb2f)
- ... [`92194b2`](https://github.com/ImageMagick/ImageMagick6/commit/92194b2ac097619013e2be312b0121c0f75911a9)
- https://github.com/ImageMagick/ImageMagick/discussions/4227 [`1c5e41a`](https://github.com/ImageMagick/ImageMagick6/commit/1c5e41a934fd40ce86f37ecee6b54a6940183f1e)
- check return status [`cca5a6a`](https://github.com/ImageMagick/ImageMagick6/commit/cca5a6a3f9eacd6c5db570f90dcd3b73a30b2f59)
- ignore zero-length profiles [`94cc6fd`](https://github.com/ImageMagick/ImageMagick6/commit/94cc6fd1c2f3ad739903726ec7e63d31a2b3d747)
- Silence warning. [`32bda8b`](https://github.com/ImageMagick/ImageMagick6/commit/32bda8bb2132fad29eb6e175d3da92e45f9c25af)
- Fixed build error. [`78e0310`](https://github.com/ImageMagick/ImageMagick6/commit/78e03105e90cd4ac5cbe2970a31a13f66c1270bf)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=39091 [`a96f221`](https://github.com/ImageMagick/ImageMagick6/commit/a96f221bfa150943d0f63b6b44910c9abd8988b2)
- https://github.com/ImageMagick/ImageMagick/issues/4278 [`4748ccc`](https://github.com/ImageMagick/ImageMagick6/commit/4748ccc31888db1e8610084b611710e7e2dadbfe)
- Revert patch because this breaks font rendering for other fonts. [`c55ddb1`](https://github.com/ImageMagick/ImageMagick6/commit/c55ddb1d646b1540afafd918be89eef69d83b467)
- Use same code as IM7. [`770902f`](https://github.com/ImageMagick/ImageMagick6/commit/770902feba3806065e77e477d3b796a185e23a82)
- Correction of the bounds measurements. [`fd9443b`](https://github.com/ImageMagick/ImageMagick6/commit/fd9443b46cb0254f1a6908be2738950d402169ab)
- Adjust the x1 offset of the bounds to make sure a font is rendered inside the canvas. [`1746362`](https://github.com/ImageMagick/ImageMagick6/commit/17463624f35b293f5e1689b8039bcdae96bdd8d1)
- Whitespace. [`d338817`](https://github.com/ImageMagick/ImageMagick6/commit/d3388174b0603040fd78d681fa85cf1080bef493)
- cosmetic [`d2b4807`](https://github.com/ImageMagick/ImageMagick6/commit/d2b4807f8eefb98f150901f941f6a1eea892f867)
- Correct replacement of spaces that use more than one octet. [`1d59719`](https://github.com/ImageMagick/ImageMagick6/commit/1d597191bd1f45d05ff041c89b7e3f8759e9eaf5)
- Added extra check to prevent replacing a non-breaking space with a newline. [`6e82f6f`](https://github.com/ImageMagick/ImageMagick6/commit/6e82f6f182f585ecc1cc70cd3fe7c5adb6c6c5ea)
- Space pointer was still pointing to the old string. [`96f65f4`](https://github.com/ImageMagick/ImageMagick6/commit/96f65f410afee03d45563c5a5fe01f4496d9b581)
- Cosmetic. [`7467737`](https://github.com/ImageMagick/ImageMagick6/commit/74677375e48303e8d3355a1cd63bdd5ee0e90269)
- argument is const [`4137ebc`](https://github.com/ImageMagick/ImageMagick6/commit/4137ebce1e559a483bb50c6aab283a30a938d63d)
- pending release [`c15d3ae`](https://github.com/ImageMagick/ImageMagick6/commit/c15d3aef8ffe50174763ef00c5780e3d6c774232)

## [6.9.12-23](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-22...6.9.12-23) - 2021-09-18

### Commits

- ... [`a9b45b4`](https://github.com/ImageMagick/ImageMagick6/commit/a9b45b47282987cd0df488ed597e7b95179960c9)
- Don't set the resolution when the cropbox is used. [`de18836`](https://github.com/ImageMagick/ImageMagick6/commit/de18836f1e1ded1395df589e5977c1aa762b486c)
- Added link to advisory. [`bd43241`](https://github.com/ImageMagick/ImageMagick6/commit/bd432413b03d7eb01ad5dcb14127910b7f80ff4c)
- Give the buffer a proper size instead of "over allocating". [`ecd4719`](https://github.com/ImageMagick/ImageMagick6/commit/ecd4719848da7562d3724e6f1b7bf24d1b72f1fc)
- Added missing null checks. [`c7039d2`](https://github.com/ImageMagick/ImageMagick6/commit/c7039d20a2fe018f041e40459d722188293012c5)
- https://github.com/ImageMagick/ImageMagick/issues/4235 [`eef08cc`](https://github.com/ImageMagick/ImageMagick6/commit/eef08ccf4da69848a6f475806f23711577f62c9e)
- pending release [`54a7092`](https://github.com/ImageMagick/ImageMagick6/commit/54a70929c2ad8df2321d4b3fc9c7d1b986ddaa2b)
- Added missing bom. [`bd9fb58`](https://github.com/ImageMagick/ImageMagick6/commit/bd9fb58de3d9e3847054ccc7ff5caba72cd5877d)
- pending release [`4230c6e`](https://github.com/ImageMagick/ImageMagick6/commit/4230c6e6ab33f8ccaff98529284a6285dc10ec61)

## [6.9.12-22](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-21...6.9.12-22) - 2021-09-12

### Commits

- ... [`75e8372`](https://github.com/ImageMagick/ImageMagick6/commit/75e83721e27b60c7354cb3ec58205a9458999dd5)
- ... [`a6f6ee2`](https://github.com/ImageMagick/ImageMagick6/commit/a6f6ee269de56892b35ffbc03ab1accb4f593be9)
- Added yml to the .editorconfig [`06c089b`](https://github.com/ImageMagick/ImageMagick6/commit/06c089b3fe5438882d54cc2ad4dbc7394b852643)
- Use yaml template instead. [`edf63d3`](https://github.com/ImageMagick/ImageMagick6/commit/edf63d36a7af9468aa07ca2a4c7b9a98db67c1ec)
- Removed travis CI link. [`c3b1c13`](https://github.com/ImageMagick/ImageMagick6/commit/c3b1c1334809ad132dddbdfac91618b144fce796)
- Changed build status link [`412d49b`](https://github.com/ImageMagick/ImageMagick6/commit/412d49b2b2a733401a469b7e658a1113e720c550)
- Added donate badge. [`a3d7d3f`](https://github.com/ImageMagick/ImageMagick6/commit/a3d7d3f1926d060f8acb4417deed015a01efad01)
- https://github.com/ImageMagick/ImageMagick/issues/4059 [`9d97e95`](https://github.com/ImageMagick/ImageMagick6/commit/9d97e95150ed3cd7ddfc478248e48b9c0d40f56b)
- Minor optimization when nothing will change. [`bfbf998`](https://github.com/ImageMagick/ImageMagick6/commit/bfbf9988fd9350a6a4da03daa011539204eecdee)
- Removed newline. [`8cc488a`](https://github.com/ImageMagick/ImageMagick6/commit/8cc488aaca954aa26406678a0032f40561a3c9b4)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=38401 [`61c3f46`](https://github.com/ImageMagick/ImageMagick6/commit/61c3f4697b2915b10123c11b09f6cf58abe0c07e)
- Moved RSVG rendering to a separate method. [`1dc463e`](https://github.com/ImageMagick/ImageMagick6/commit/1dc463eb50f48b9bd4f06530021f4fe52376e5d4)
- Moved MSVG rendering to a separate method. [`a39da2b`](https://github.com/ImageMagick/ImageMagick6/commit/a39da2b112d2f36d78c5d79a821216385be7f8f3)
- Added extra policy check. [`899d06f`](https://github.com/ImageMagick/ImageMagick6/commit/899d06fb1a97083bddda51cc88abc0f79841667e)
- Fixed incorrect check when module is used as the domain in policy.xml that would allow the use of a disabled module. [`8cd2fcd`](https://github.com/ImageMagick/ImageMagick6/commit/8cd2fcd33460826628a7590dc3ce74d7785e1598)
- Added missing policy checks in RegisterStaticModules. [`69ea558`](https://github.com/ImageMagick/ImageMagick6/commit/69ea5587de17ef89476be47a3cb7f855c0355a74)
- Added early exists. [`005af2a`](https://github.com/ImageMagick/ImageMagick6/commit/005af2a1557c8b49bf1116c380435c8064f9f70c)
- Use AllPolicyRights instead. [`b60e171`](https://github.com/ImageMagick/ImageMagick6/commit/b60e17133b982d28816386b83174c2bc06dd39bd)
- Revert break to make it possible to use and allow list. [`10c0f5b`](https://github.com/ImageMagick/ImageMagick6/commit/10c0f5b31bbea82ebd219a0da201a99a2e874c52)
- Use the correct rights. [`428e685`](https://github.com/ImageMagick/ImageMagick6/commit/428e68597fa904d0bdc133d878e12acd7dc60fa3)
- Clean up the remaining PDF files if reading one of the files fails. [`3177df6`](https://github.com/ImageMagick/ImageMagick6/commit/3177df671ee3904bdfe09c05d297fa1580253e98)
- pending release [`83b8cb1`](https://github.com/ImageMagick/ImageMagick6/commit/83b8cb1d99f0f842be50007572c7ecdb588e292d)
- Also set RGB channels when reading the image (#167). [`4282b98`](https://github.com/ImageMagick/ImageMagick6/commit/4282b98eb645351ddf122faa67c94610718595dc)
- Added missing call to ConstrainColormapIndex. [`02ce9e1`](https://github.com/ImageMagick/ImageMagick6/commit/02ce9e1bbba067b2ebcc18d07456a22570cbf5f2)
- pending release [`be2ebac`](https://github.com/ImageMagick/ImageMagick6/commit/be2ebac260ba43ede0b3beb5820a5d6492c35481)
- https://github.com/ImageMagick/ImageMagick/issues/2579 [`843fd11`](https://github.com/ImageMagick/ImageMagick6/commit/843fd110d7d3b0fa5e00c553290739fde2778ab1)
- pending release [`9146746`](https://github.com/ImageMagick/ImageMagick6/commit/9146746f54a24775225e541edc58364ab13e0126)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=38573 [`c4bdacf`](https://github.com/ImageMagick/ImageMagick6/commit/c4bdacff93e145dc1dd282cca3b04127ceb71bf4)
- check for EOF [`b3bc44a`](https://github.com/ImageMagick/ImageMagick6/commit/b3bc44a3211edfa701075e3a178bb434050bb785)
- check for EOF [`ae88f07`](https://github.com/ImageMagick/ImageMagick6/commit/ae88f07cd31bdbb671270349abdc48d9ca6463fb)
- pending release [`f48b623`](https://github.com/ImageMagick/ImageMagick6/commit/f48b6233e976f56a499a49c55b5f3f26c11451f5)

## [6.9.12-21](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-20...6.9.12-21) - 2021-09-04

### Commits

- ... [`397b5c3`](https://github.com/ImageMagick/ImageMagick6/commit/397b5c32487efdc5eb7daf206c6317fb670bad16)
- ./configure --help no longer lists -disable-assert twice [`0aab306`](https://github.com/ImageMagick/ImageMagick6/commit/0aab3061aad8211bcec1eb0f4e479414c8a9a3f1)
- https://github.com/ImageMagick/ImageMagick/issues/4121 [`6ba45df`](https://github.com/ImageMagick/ImageMagick6/commit/6ba45df1e4c67d9897262a7ff5706eb404f2ea7f)
- tweak the bilevel image type [`473c7cd`](https://github.com/ImageMagick/ImageMagick6/commit/473c7cd850bdc40c2d1e8e72c4d3b073f1079138)
- https://github.com/ImageMagick/ImageMagick/issues/4105 [`3afc3bc`](https://github.com/ImageMagick/ImageMagick6/commit/3afc3bc9d97ec424bd92ab5c74f090586d91fa0b)
- Minor changes to the formatting of the parentheses. [`278a93e`](https://github.com/ImageMagick/ImageMagick6/commit/278a93e8940eff474a083b42dde39a0c7da1c85e)
- Use different values per channel for scale and translate. [`109e236`](https://github.com/ImageMagick/ImageMagick6/commit/109e236860e35212a90b5eb6b93a6662ca208233)
- Add -dPrinted=false to the Ghostscript options (#4019) [`5f82ea4`](https://github.com/ImageMagick/ImageMagick6/commit/5f82ea411e7e1190f2f7aed8a0b1c97a42b6bd58)
- Added .editorconfig [`afad655`](https://github.com/ImageMagick/ImageMagick6/commit/afad65584be6d6d25902599b44f4c20c9a747692)
- Use link for the Windows build instructions instead. [`d8da2c5`](https://github.com/ImageMagick/ImageMagick6/commit/d8da2c53bdc4a738017a8ba346ab523935878faa)
- Add -HDRI to the quantum in the version string when HDRI is enabled. [`423a801`](https://github.com/ImageMagick/ImageMagick6/commit/423a8014dfa4705ebd8ec057ea78d99c224871d7)
- https://oss-fuzz.com/testcase-detail/6502669439598592 [`995de33`](https://github.com/ImageMagick/ImageMagick6/commit/995de330310dd35531165d9471fe4d31e0fa79ae)
- pending release [`9eb3b4e`](https://github.com/ImageMagick/ImageMagick6/commit/9eb3b4ea7b66e515283c0f9b5158c0c2f368c324)
- initialize buffer before calling TIFFGetField() [`ce2f067`](https://github.com/ImageMagick/ImageMagick6/commit/ce2f0676f8766343ae2322ace7311a53c7ae6d97)
- Use UTC date as requested in #166. [`e0967ea`](https://github.com/ImageMagick/ImageMagick6/commit/e0967eae28b4594f08c0a443ee53ac15390cff4a)
- pending release [`c4ed7a2`](https://github.com/ImageMagick/ImageMagick6/commit/c4ed7a29cf8695a67341175a329532947bc50b54)

## [6.9.12-20](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-19...6.9.12-20) - 2021-08-22

### Commits

- ... [`aebaac6`](https://github.com/ImageMagick/ImageMagick6/commit/aebaac62a29393e35d3c20715056cb74f6792e13)
- timeb.h is deprecated [`827ba53`](https://github.com/ImageMagick/ImageMagick6/commit/827ba5310372558385feb91a03afda829928a25e)
- eliminate compiler warning [`1c9bcc6`](https://github.com/ImageMagick/ImageMagick6/commit/1c9bcc67803f7130afda8f2caa8bd8a5f1999dde)
- reset image structure magick member [`e2045ec`](https://github.com/ImageMagick/ImageMagick6/commit/e2045ec83b5f709decf50c762ceac843e749d52e)
- optimize on grayscale detection [`e38fce1`](https://github.com/ImageMagick/ImageMagick6/commit/e38fce1ef0f7b569ec664a4b228335e34e037ae0)
- grayscale images were not being written properly [`84e8b18`](https://github.com/ImageMagick/ImageMagick6/commit/84e8b18294907a1232b216d89a60008341dfbc5a)
- check if colorspace is incompatible before transforming it to sRGB [`fdf7e64`](https://github.com/ImageMagick/ImageMagick6/commit/fdf7e64ed09666a0c8f3588b47d302b01a7cdeaa)
- reduce memory moves [`0132164`](https://github.com/ImageMagick/ImageMagick6/commit/0132164f33ea82daf732f3923c2fb141cb834dcc)
- ... [`92a2023`](https://github.com/ImageMagick/ImageMagick6/commit/92a2023362cf5b2e31df3b9331015a3093deb65f)
- heap-based buffer overflow in TIFF coder (alert from Hunter Mitchell) [`e1fbcdf`](https://github.com/ImageMagick/ImageMagick6/commit/e1fbcdf3aad96d51db65c1601117396eac665a6d)
- heap-based buffer overflow in TIFF coder (alert from Hunter Mitchell) [`35b88c9`](https://github.com/ImageMagick/ImageMagick6/commit/35b88c9166bc1b3ce8893f52217bae00d8e2c532)
- heap-based buffer overflow in TIFF coder (alert from Hunter Mitchell) [`f90a091`](https://github.com/ImageMagick/ImageMagick6/commit/f90a091c7dd12cc53b0999bf49d1c80651534eea)
- eliminate improper assertion [`78c72ee`](https://github.com/ImageMagick/ImageMagick6/commit/78c72ee91c93c4d10f89de781a711bf4e53dfcd9)
- Whitespace [`4d1d0a6`](https://github.com/ImageMagick/ImageMagick6/commit/4d1d0a6a6adc8433126ec912c87336c797f92735)
- Only run the OpenCL benchmark when OpenCL is enabled. [`a04e6c4`](https://github.com/ImageMagick/ImageMagick6/commit/a04e6c49bdc19d9918d5a588ea3fd95f39dcd379)
- mean is already computed, don't compute it again [`b1a8609`](https://github.com/ImageMagick/ImageMagick6/commit/b1a86095382b696ffef5a286b3cdb2ecf1599683)
- the -format option now respects the -channel argument [`6dc7e94`](https://github.com/ImageMagick/ImageMagick6/commit/6dc7e946ad28bc74f0385f32409382d2c290f6c2)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=36990 [`9aa9170`](https://github.com/ImageMagick/ImageMagick6/commit/9aa91709d2b9ec1b98398e081e2fb67bb7e1718e)
- https://github.com/ImageMagick/ImageMagick/issues/4059 [`63037e7`](https://github.com/ImageMagick/ImageMagick6/commit/63037e7bbf33574513126f5aef0acf3416146a93)
- https://github.com/ImageMagick/ImageMagick/issues/4059 [`37b4985`](https://github.com/ImageMagick/ImageMagick6/commit/37b49851335e9df91de7cdf763d27768c85c69e3)
- https://github.com/ImageMagick/ImageMagick/issues/4059 [`54df923`](https://github.com/ImageMagick/ImageMagick6/commit/54df923634871204a7a371b9523ab63d67cc37d1)
- https://github.com/ImageMagick/ImageMagick/issues/4059 [`41c9434`](https://github.com/ImageMagick/ImageMagick6/commit/41c9434f427bcbba9163f4550cd034a6d8363fb9)
- Use &amp; instead. [`8a23eb2`](https://github.com/ImageMagick/ImageMagick6/commit/8a23eb2603186c704f30d4b2f17bdefa5d6822d3)
- stop parsing after exception [`44c3bfc`](https://github.com/ImageMagick/ImageMagick6/commit/44c3bfc788dd4c94682093d480c514ab38543a2f)
- stop parsing on exception [`b915afb`](https://github.com/ImageMagick/ImageMagick6/commit/b915afb73148a8da5bca4a018a43c0432873d7fc)
- pending release [`bf9a427`](https://github.com/ImageMagick/ImageMagick6/commit/bf9a4278c183d2713894d0ff1d4e97232cd2d70e)
- pending release [`4e5510e`](https://github.com/ImageMagick/ImageMagick6/commit/4e5510e020300678a4ea20a4e35348444981cba5)
- Use new solution that is already upgrade to VS2019. [`b9ca6d9`](https://github.com/ImageMagick/ImageMagick6/commit/b9ca6d96820f7f2278515f6bfb26b72c42e1338b)
- pending release [`d49be7f`](https://github.com/ImageMagick/ImageMagick6/commit/d49be7fbb7667ec214cd00a16145d7f4e3f1606e)
- pending release [`1e43b29`](https://github.com/ImageMagick/ImageMagick6/commit/1e43b291a5825520860b92acb3f7b52ba6145805)
- pending release [`0f1b20c`](https://github.com/ImageMagick/ImageMagick6/commit/0f1b20cf7eaa687847c1da3356961eb44e807911)

## [6.9.12-19](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-18...6.9.12-19) - 2021-07-18

### Commits

- ... [`45df407`](https://github.com/ImageMagick/ImageMagick6/commit/45df407647856e7b5750767e49885b2f32a29c36)
- https://github.com/ImageMagick/ImageMagick/issues/3896 [`f939ee0`](https://github.com/ImageMagick/ImageMagick6/commit/f939ee00031464bd30cc69dcab8777f39ee8fbb8)
- ... [`3b491b8`](https://github.com/ImageMagick/ImageMagick6/commit/3b491b852a6f692ebc3ace6fee8ceb7ceb0adde9)
- remove virtual canvas offset from similarity image [`1f974fd`](https://github.com/ImageMagick/ImageMagick6/commit/1f974fd9eb285da31989e97d51fca67648643ef2)
- ... [`b847557`](https://github.com/ImageMagick/ImageMagick6/commit/b847557488c072763c2a0ecf62d0cfac5748353b)
- ... [`d09e86f`](https://github.com/ImageMagick/ImageMagick6/commit/d09e86f7d23784a2e8156ad7341a4221f0034d83)
- ... [`d881b80`](https://github.com/ImageMagick/ImageMagick6/commit/d881b800c7f768bb5926e0ad730401bd866865cc)
- Fixed writing the iptc information when it is not stored as long. [`f4feb3e`](https://github.com/ImageMagick/ImageMagick6/commit/f4feb3eef7d1013f90babd21dee51736a21be1b2)
- https://github.com/ImageMagick/ImageMagick/issues/3951 [`e924a55`](https://github.com/ImageMagick/ImageMagick6/commit/e924a55afa85eff1780ad78d875f6429a50c4c11)
- call wand genesis / terminus rather than core [`c4f26fb`](https://github.com/ImageMagick/ImageMagick6/commit/c4f26fbfd50bdb47397977758dc770f92b35a4bd)
- pending release [`c0e73a4`](https://github.com/ImageMagick/ImageMagick6/commit/c0e73a46b330d6f58dd0f5bb5ecf7c9287812acb)
- revert; keep CoreGenesis/CoreTerminus pairs; destroy wand ids [`2f3cc2c`](https://github.com/ImageMagick/ImageMagick6/commit/2f3cc2cf8339f1defd4215efcb320119de6ac1df)
- install wand.h header that defines DestroyWandIDs() [`c2d788c`](https://github.com/ImageMagick/ImageMagick6/commit/c2d788c52ab9824c938af0a85ae83281d4c9c0a4)
- pending release [`5b9a9db`](https://github.com/ImageMagick/ImageMagick6/commit/5b9a9dbbe0c5b1654ff3185dee96fae0f0514295)
- call MagickWandGenesis()/MagickWandTerminus() [`64aef14`](https://github.com/ImageMagick/ImageMagick6/commit/64aef14cc75b3bc0af31bc417060d79dfb6194e0)
- pending release [`1015767`](https://github.com/ImageMagick/ImageMagick6/commit/1015767a1429e3fa67b63853dc67d625171812c1)
- pending release [`e28afaa`](https://github.com/ImageMagick/ImageMagick6/commit/e28afaa4eb6f184689c218debe9ba4874b9f727b)

## [6.9.12-18](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-17...6.9.12-18) - 2021-07-17

### Merged

- uses the PerceptibleReciprocal() to prevent the divide-by-zero from occurring [`#3194`](https://github.com/ImageMagick/ImageMagick6/pull/3194)

### Commits

- ... [`74f450e`](https://github.com/ImageMagick/ImageMagick6/commit/74f450e153dccb64bc254fca89318b00f6dd0eda)
- Use the new issue templates. [`7c853af`](https://github.com/ImageMagick/ImageMagick6/commit/7c853afa3be12dfff22b34f0d2ddaf15180e66d9)
- system() is not supported under IOS [`b9f3577`](https://github.com/ImageMagick/ImageMagick6/commit/b9f3577b509808187fcb9b4a8955d6327bcd0e09)
- Removed checklist. [`bc06359`](https://github.com/ImageMagick/ImageMagick6/commit/bc06359cf59e33b88ba0199f01ed4b5f1bbe8f6b)
- Make it more clear that no memory is leaking. [`7f0b16c`](https://github.com/ImageMagick/ImageMagick6/commit/7f0b16c0578766a578cdaa686e891b4812d17848)
- The predictor tag should only be set for specific compression types. [`96c9b70`](https://github.com/ImageMagick/ImageMagick6/commit/96c9b7032d4b5cc3703cc32a1d59ab8c64a6a289)
- set imaginary component of the complex conjugate to -Ai [`f6b610f`](https://github.com/ImageMagick/ImageMagick6/commit/f6b610f6370b5140b86e50854a0b72dfc4d0dff0)
- Added raqm to the autolinking list. [`756685f`](https://github.com/ImageMagick/ImageMagick6/commit/756685f4111943499a530c4bcf84b55964b8ba00)
- Added option to peek in the byte buffer. [`63bc851`](https://github.com/ImageMagick/ImageMagick6/commit/63bc85166df5b0c14562687252d8050cee1a73fb)
- Fixed parsing the spot colors of a postscript document. [`ce84a88`](https://github.com/ImageMagick/ImageMagick6/commit/ce84a88592408d25533cd63a58ba7ee1b2b7c4cd)
- prevent blow up when standard deviation is 0 [`033df67`](https://github.com/ImageMagick/ImageMagick6/commit/033df67ae2d4ef2dc13952bfc48cbc5bef4b1686)
- optimize grayscale detection [`ec9feab`](https://github.com/ImageMagick/ImageMagick6/commit/ec9feabc987df9781c4e89f2ce014b75b02bfd0d)
- check for zero demoninator [`e110b81`](https://github.com/ImageMagick/ImageMagick6/commit/e110b81fd38b2e15dc7495699de53df51f4ade91)
- https://github.com/ImageMagick/ImageMagick/issues/3925 [`cd274e4`](https://github.com/ImageMagick/ImageMagick6/commit/cd274e439e7bb49d18b1be7617d89f3be91b3188)
- Corrected getting the image dimensions when identifying a postscript file. [`d624b59`](https://github.com/ImageMagick/ImageMagick6/commit/d624b590d2b1a4dd2d9f6794d6c388ca7b9069db)
- Fixed copy paste mistake. [`0416173`](https://github.com/ImageMagick/ImageMagick6/commit/0416173677748e027ac772fa2094174a0a91b6d3)
- proper cast [`4ce1321`](https://github.com/ImageMagick/ImageMagick6/commit/4ce1321c497e76e07d6c785840a2c6a0d2c6dbd8)
- pending release [`83e0280`](https://github.com/ImageMagick/ImageMagick6/commit/83e0280d488f14cf73f1e85cbf6857a56438f2db)

## [6.9.12-17](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-16...6.9.12-17) - 2021-06-25

### Commits

- ... [`801ffbd`](https://github.com/ImageMagick/ImageMagick6/commit/801ffbdc1a221e7a9947d22efb81101ce7fb2289)
- ... [`c1cb4d2`](https://github.com/ImageMagick/ImageMagick6/commit/c1cb4d26d533aa137cc5280aa6370f8d61150a1c)
- ... [`8c99db4`](https://github.com/ImageMagick/ImageMagick6/commit/8c99db4d683f3fd1a4a89b85b3dc5c4b2c7295f4)
- fix memory corruption in ConcatenateStringInfo [`7b5d5d9`](https://github.com/ImageMagick/ImageMagick6/commit/7b5d5d943fec12ccd167a6fed11758c609cb3275)
- pending release [`fdb4ff6`](https://github.com/ImageMagick/ImageMagick6/commit/fdb4ff6575cb1012397a9a9e03f45924d56fd8fa)

## [6.9.12-16](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-15...6.9.12-16) - 2021-06-20

### Commits

- ... [`dafa983`](https://github.com/ImageMagick/ImageMagick6/commit/dafa983fea7c9b0160c375435c53e83bc436b3c8)
- ... [`8aea6ca`](https://github.com/ImageMagick/ImageMagick6/commit/8aea6ca9f5363b4f5d6caaaa1df2c87a4bc43c82)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=35322 [`40f9bcd`](https://github.com/ImageMagick/ImageMagick6/commit/40f9bcd0f47d24eae4a9c3d542273af586938695)
- https://github.com/ImageMagick/ImageMagick/issues/3844 [`fdf3836`](https://github.com/ImageMagick/ImageMagick6/commit/fdf38365635ec2e31d1c5294f1fb22a34917f2d4)
- pending release [`17d7b4b`](https://github.com/ImageMagick/ImageMagick6/commit/17d7b4bad2ca7fc7374164f1c40cb6f8282c4afb)
- ver allocate memory, typically used when concatentating strings [`73a59dc`](https://github.com/ImageMagick/ImageMagick6/commit/73a59dcd4eaae3a0cec565abda9c0dcb070c734a)
- ... [`d259da5`](https://github.com/ImageMagick/ImageMagick6/commit/d259da5de84df842780e79b5994a8d95b16c488c)
- Revert patch that automatically changes the image orientation. [`086c8ee`](https://github.com/ImageMagick/ImageMagick6/commit/086c8eebf8df72086f2370b1e5c9ec72becaf89a)
- Use the same typecast as in ImageMagick 7. [`d02e016`](https://github.com/ImageMagick/ImageMagick6/commit/d02e016daae2768e7abfc034c4b81d8fb3863617)
- pending release [`25aa96d`](https://github.com/ImageMagick/ImageMagick6/commit/25aa96dee935a052bd0b0893780bb5ea6bc4ecb4)
- pending release [`46762e1`](https://github.com/ImageMagick/ImageMagick6/commit/46762e1b539aba1bfc7f39f6027a23a7cf84d276)

## [6.9.12-15](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-14...6.9.12-15) - 2021-06-12

### Commits

- ... [`ece4978`](https://github.com/ImageMagick/ImageMagick6/commit/ece4978c35d73eee4eda064b8f429a6ad42a3bec)
- https://github.com/ImageMagick/ImageMagick/issues/3765 [`a8c277e`](https://github.com/ImageMagick/ImageMagick6/commit/a8c277e07d1a0c92179f830e9399ee7b8cc15931)
- Fixed memory leak when it failed to apply ICC color profile [`1d4b8f4`](https://github.com/ImageMagick/ImageMagick6/commit/1d4b8f499985f5b576b53b7b478a9c5ab82116d1)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=35024 [`cde1733`](https://github.com/ImageMagick/ImageMagick6/commit/cde173361e901f957e56640fe03f59e78d92168b)
- Write the number of channels of the color profile instead of the image (#2070). [`af88978`](https://github.com/ImageMagick/ImageMagick6/commit/af88978d2d35a047e1d7daa5a24df69e032db65a)
- Corrected writing the icc profile in a PDF file. [`5a73bdc`](https://github.com/ImageMagick/ImageMagick6/commit/5a73bdcc68d2b1a1a14df1324e0178778f7b9030)
- When the compression is OJPEG the colorspace should not be changed to YCbCr. [`24fa0a8`](https://github.com/ImageMagick/ImageMagick6/commit/24fa0a82bdde4bec9d85ba9a59aebc5d83f17743)
- https://github.com/ImageMagick/ImageMagick/issues/3818 [`4512ff0`](https://github.com/ImageMagick/ImageMagick6/commit/4512ff04e3bb51874129d4857734e235f52b974d)
- ... [`637a850`](https://github.com/ImageMagick/ImageMagick6/commit/637a850cf7f3d87e35041b82ee6305503b996ea6)
- https://github.com/ImageMagick/ImageMagick/issues/3786 [`ed858f9`](https://github.com/ImageMagick/ImageMagick6/commit/ed858f9af9797ddd07c818c0c84cfe1121d7fd9b)
- https://github.com/ImageMagick/ImageMagick/discussions/3813 [`dabbe44`](https://github.com/ImageMagick/ImageMagick6/commit/dabbe4450429779f526b9eb3ba29df9ff0653689)
- pending release [`15126f0`](https://github.com/ImageMagick/ImageMagick6/commit/15126f081300bac271947eb5dc21ecda6e85b070)
- https://github.com/ImageMagick/ImageMagick/issues/3818 [`b21457a`](https://github.com/ImageMagick/ImageMagick6/commit/b21457a7eb9cb4c2f7c497b36a8efdab71beb4e6)
- pending release [`f1893ff`](https://github.com/ImageMagick/ImageMagick6/commit/f1893ff113904f1062fbec74345e01fc708d0dba)

## [6.9.12-14](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-12...6.9.12-14) - 2021-05-31

### Commits

- ... [`14ea894`](https://github.com/ImageMagick/ImageMagick6/commit/14ea8946956a0b2be3c2c4acc73442ddfddee95a)
- https://github.com/ImageMagick/ImageMagick/discussions/3583 [`d780ce0`](https://github.com/ImageMagick/ImageMagick6/commit/d780ce0a931d809e4452b7b3c8181806baeb1e8c)
- ... [`5e392ec`](https://github.com/ImageMagick/ImageMagick6/commit/5e392ec12363fdfd8fe9b5d98bbead89f560dd78)
- ... [`e53f1fd`](https://github.com/ImageMagick/ImageMagick6/commit/e53f1fd02a97f521c4b26faf439b7b4bb55af58c)
- Added missing status checks. [`7b2c55c`](https://github.com/ImageMagick/ImageMagick6/commit/7b2c55c2280323956b7c70909775fc81cecf98bd)
- Fixed reading and writing the XMP chunk in a WebP image. [`62b736a`](https://github.com/ImageMagick/ImageMagick6/commit/62b736a9a6d7e736fabaaf728c8ecaaacadc2c7d)
- https://github.com/ImageMagick/ImageMagick/issues/3653 [`8e9b75e`](https://github.com/ImageMagick/ImageMagick6/commit/8e9b75ea13bf007724d5e6dd5625f9af7d6098fa)
- ... [`a792ea6`](https://github.com/ImageMagick/ImageMagick6/commit/a792ea62e0d72b86c2bb8502dec17f6e6d15c227)
- The image type should not be changed when the image already has the correct type. [`8f74220`](https://github.com/ImageMagick/ImageMagick6/commit/8f74220f4f1dfdb0841f055402f19e219348af56)
- update CSS [`502d738`](https://github.com/ImageMagick/ImageMagick6/commit/502d73855661295eec94519ea83a1c31a1804d1a)
- https://github.com/ImageMagick/ImageMagick/issues/3676 [`9d8e861`](https://github.com/ImageMagick/ImageMagick6/commit/9d8e86156f0f2c949623bfbd5c78d6c89a7c5467)
- pending release [`f4efad9`](https://github.com/ImageMagick/ImageMagick6/commit/f4efad954ad505c71d17fa40f94af691d1492555)
- Removed travis build. [`bdff671`](https://github.com/ImageMagick/ImageMagick6/commit/bdff671dc524e5faae69fa9dfe53b6af7d7d6ffc)
- https://github.com/ImageMagick/ImageMagick/pull/3685/ [`2ac82aa`](https://github.com/ImageMagick/ImageMagick6/commit/2ac82aa7f502c779cbabd7f7c06d39eedcbfb042)
- Moved definition of the define to this header file. [`5e2af4c`](https://github.com/ImageMagick/ImageMagick6/commit/5e2af4c542d0fee760eb9e2e0e3acd333156da0f)
- https://github.com/ImageMagick/ImageMagick/issues/3687 [`274d848`](https://github.com/ImageMagick/ImageMagick6/commit/274d8481b11054b0c15c3b118e0fd2bb57919119)
- pending release [`8947663`](https://github.com/ImageMagick/ImageMagick6/commit/89476634dafdafdf86573f75c6a34743d5805641)
- The path should not end in a backslash according to the MSDN documentation. [`8533847`](https://github.com/ImageMagick/ImageMagick6/commit/8533847ff7cfd9fb7de549d383179a65a7019ae9)
- Always use a wildcard in NTOpenDirectory. [`8305ee3`](https://github.com/ImageMagick/ImageMagick6/commit/8305ee3125b1d6cb9e6fb6978fae5a6ee6cb19f6)
- pending release [`6f1745f`](https://github.com/ImageMagick/ImageMagick6/commit/6f1745f5d593df4c3b98ec763c6b690abc1dec97)
- Silence mingw warnings. [`a4ec89d`](https://github.com/ImageMagick/ImageMagick6/commit/a4ec89d233d6d5e03d558b14989322db7ec5f413)
- Removed unused variable. [`5b44db7`](https://github.com/ImageMagick/ImageMagick6/commit/5b44db70ca28b8f88ab5f9104570e85c4e16e74f)
- ... [`abd606b`](https://github.com/ImageMagick/ImageMagick6/commit/abd606b33eae106296b660e047adfc1e933ef900)
- NULL color name is acceptable [`d5a3cf7`](https://github.com/ImageMagick/ImageMagick6/commit/d5a3cf7270d1ef509ef61a55f51e33c1e894854b)
- https://github.com/ImageMagick/ImageMagick/issues/3690 [`2f1c004`](https://github.com/ImageMagick/ImageMagick6/commit/2f1c00490617ce067d8319866c8022411d17f2a4)
- eliminate heap buffer overflow vulnerability, thanks to ZhangJiaxing (@r0fm1a) from Codesafe Team of Legendsec at Qi'anxin Group [`b307bca`](https://github.com/ImageMagick/ImageMagick6/commit/b307bcadcdf6ea6819951ac1786b7904f27b25c6)
- ... [`1b85287`](https://github.com/ImageMagick/ImageMagick6/commit/1b85287582cd72bcb128800d50878dd33a37ae65)
- https://github.com/ImageMagick/ImageMagick/pull/3749 [`6ba4b42`](https://github.com/ImageMagick/ImageMagick6/commit/6ba4b42dc9269f301952c1ec2dd0fb782834e00d)
- https://github.com/ImageMagick/ImageMagick/pull/3749 [`3233cab`](https://github.com/ImageMagick/ImageMagick6/commit/3233cab9b2a623626fe6d414b49dbe1a5b732a2d)
- update copyright [`e65639e`](https://github.com/ImageMagick/ImageMagick6/commit/e65639eace3619b600881c0722a9f5f28b2d0f46)
- ... [`c75ae77`](https://github.com/ImageMagick/ImageMagick6/commit/c75ae771a00c38b757c5ef4b424b51e761b02552)
- pending release [`7f8bf2f`](https://github.com/ImageMagick/ImageMagick6/commit/7f8bf2fe0325f577ab518fda227d068237065ac6)

## [6.9.12-12](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-11...6.9.12-12) - 2021-05-09

### Commits

- ... [`5ec7ae6`](https://github.com/ImageMagick/ImageMagick6/commit/5ec7ae6d969667bb78d238649dd422e8f8441436)
- ... [`dd9b62d`](https://github.com/ImageMagick/ImageMagick6/commit/dd9b62d7ca80ffe5eebb34befc727ab3e59dc10b)
- https://github.com/ImageMagick/ImageMagick/issues/3520 [`8aa401e`](https://github.com/ImageMagick/ImageMagick6/commit/8aa401e00e229f0cb55ac733b9aa03c8bab884f5)
- https://github.com/ImageMagick/ImageMagick/issues/3520 [`ed78be2`](https://github.com/ImageMagick/ImageMagick6/commit/ed78be2e62accb8ac0747fd2a72c9c52758b2f3a)
- pending release [`0d11539`](https://github.com/ImageMagick/ImageMagick6/commit/0d11539c266133971246eb2d0d49e626a43bcdf0)
- support dither:diffusion-amount define for Riemersma dithering [`0d0f402`](https://github.com/ImageMagick/ImageMagick6/commit/0d0f402452dda40667926548882d18d2d336e141)
- improve exception testing [`94026fb`](https://github.com/ImageMagick/ImageMagick6/commit/94026fbfb045d27576799d84ee63320ba7cbc7aa)
- ... [`a5fec66`](https://github.com/ImageMagick/ImageMagick6/commit/a5fec668b59d0a725d96d56fae1b4864073f5b86)

## [6.9.12-11](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-10...6.9.12-11) - 2021-05-04

### Commits

- Add full threshold map [`c9753f9`](https://github.com/ImageMagick/ImageMagick6/commit/c9753f9113014a3d0283e8e4332447e7d1e5ed52)
- fix names [`fbb8139`](https://github.com/ImageMagick/ImageMagick6/commit/fbb8139444e7d2debede07ceec91295243fb7619)
- ... [`3df3254`](https://github.com/ImageMagick/ImageMagick6/commit/3df32542e617b7df3291dded38a4825e926d8335)
- Use ExceptionInfo instead of letting libraw print to stderr. [`8462661`](https://github.com/ImageMagick/ImageMagick6/commit/8462661321389bab113b76bc74e0c27448914792)
- Replace tabs with spaces. [`b9d006e`](https://github.com/ImageMagick/ImageMagick6/commit/b9d006e0089fad6afab71528d34f00aa401e4023)
- Generate threshold-map.h instead. [`d4c3361`](https://github.com/ImageMagick/ImageMagick6/commit/d4c33614def7874b55607238f8fd83c8bbddea48)
- Corrected typo. [`3d0d0e0`](https://github.com/ImageMagick/ImageMagick6/commit/3d0d0e0564339cf93da53852fa50005b55890e87)
- Another attempt. [`816071e`](https://github.com/ImageMagick/ImageMagick6/commit/816071e70ea0dff2ec939dcb8a6b818f25e83d4f)
- Use magick instead of MagickCore. [`38f6779`](https://github.com/ImageMagick/ImageMagick6/commit/38f67793a6c37263e4aaffd8b9ef3c2510859836)
- ... [`c46cd9f`](https://github.com/ImageMagick/ImageMagick6/commit/c46cd9fe551b567fb7b40bba052d3502d00f0f30)
- fix Makefile separator exception [`0d00ae7`](https://github.com/ImageMagick/ImageMagick6/commit/0d00ae7e3afb9e5022bb00ba042b5e5ee71c6bc3)
- improve method name [`5d112e0`](https://github.com/ImageMagick/ImageMagick6/commit/5d112e0673ccc6f1632f6ff63c62d5a0bf6225e7)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=33831 [`307f11e`](https://github.com/ImageMagick/ImageMagick6/commit/307f11e997b452a2a0a24abcf52eff16f4e11119)
- https://github.com/ImageMagick/ImageMagick/issues/3468 [`5c22ac6`](https://github.com/ImageMagick/ImageMagick6/commit/5c22ac68a5077995db1ce40ddf37ea6ba14e3e29)
- ... [`2316ca6`](https://github.com/ImageMagick/ImageMagick6/commit/2316ca67f6a6997b131aef292d33a1c38ee5cccf)
- cosmetic [`f944c0e`](https://github.com/ImageMagick/ImageMagick6/commit/f944c0efc98c5c6f7d6858666d6e3b207ad73e03)
- ... [`b3f69a1`](https://github.com/ImageMagick/ImageMagick6/commit/b3f69a17a508788164a973ed8b9f10264b776f8b)
- Corrected check in the TIFF decoder. [`a260de2`](https://github.com/ImageMagick/ImageMagick6/commit/a260de22e0676d0497ff780f0ccdbb795c05141b)
- ... [`e670f7f`](https://github.com/ImageMagick/ImageMagick6/commit/e670f7fc527eafe79134eb81786179f1760d9ec7)
- https://github.com/ImageMagick/ImageMagick/issues/3520 [`caee165`](https://github.com/ImageMagick/ImageMagick6/commit/caee16574b1cce8f45cf01f63ea7a8988cbfe5fd)
- pending release [`1ba0774`](https://github.com/ImageMagick/ImageMagick6/commit/1ba077420bd1a69c5dd5daed2c4a8736240ef256)
- revert comments [`7d8a3b7`](https://github.com/ImageMagick/ImageMagick6/commit/7d8a3b762f3a9b1171d904da52293fe43cd8e0cb)
- pending release [`930161d`](https://github.com/ImageMagick/ImageMagick6/commit/930161d603e2b65f363a10ba142e2ac732e28302)

## [6.9.12-10](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-9...6.9.12-10) - 2021-04-28

### Merged

- Fix line endings in Geometry.h to LF. [`#149`](https://github.com/ImageMagick/ImageMagick6/pull/149)
- Fix incorrect client_data pointer being set in libjpeg context. [`#152`](https://github.com/ImageMagick/ImageMagick6/pull/152)

### Fixed

- Fix incorrect client_data pointer being set in libjpeg context. (#152) [`#150`](https://github.com/ImageMagick/ImageMagick6/issues/150) [`#151`](https://github.com/ImageMagick/ImageMagick6/issues/151)

### Commits

- ... [`c770f50`](https://github.com/ImageMagick/ImageMagick6/commit/c770f508dea2e72791845e745696092f3e794a58)
- ... [`99cbc9f`](https://github.com/ImageMagick/ImageMagick6/commit/99cbc9f2542b9857c8abe580870b2b7a59e60731)
- check image is not NULL before dereferencing [`5ee7e3e`](https://github.com/ImageMagick/ImageMagick6/commit/5ee7e3eae5a0f4c06969c5b99a0a605901c0eac1)
- pending release [`370ce4c`](https://github.com/ImageMagick/ImageMagick6/commit/370ce4c7e2f6c04a672ca0b5ebb05acb490e31e9)
- pending release [`fea001e`](https://github.com/ImageMagick/ImageMagick6/commit/fea001e31a471c1e6605aa6e6ae97fb554a0e784)

## [6.9.12-9](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-8...6.9.12-9) - 2021-04-24

### Commits

- ... [`99b82fe`](https://github.com/ImageMagick/ImageMagick6/commit/99b82feded146a666b808c977db248c0e78bc757)
- ... [`6fd9c48`](https://github.com/ImageMagick/ImageMagick6/commit/6fd9c48d18522fc739988c635b4f230f5a9553a9)
- Corrected ChangeLog. [`165f89f`](https://github.com/ImageMagick/ImageMagick6/commit/165f89f5c3cdd05a49c08c001187c8ccfb5d6e58)
- ... [`fb64736`](https://github.com/ImageMagick/ImageMagick6/commit/fb647360465898972581c5a44d92f05040c61bbf)
- ... [`969b02d`](https://github.com/ImageMagick/ImageMagick6/commit/969b02d7a66e0d74a5290183e334995586e4a3dd)
- ... [`181125f`](https://github.com/ImageMagick/ImageMagick6/commit/181125f67ecf9ac57adef1db861181d8d6adbe70)
- Corrected typo. [`c8c3cf8`](https://github.com/ImageMagick/ImageMagick6/commit/c8c3cf8a1d7f93de7127606e5ccc0f2068216322)
- ... [`878f631`](https://github.com/ImageMagick/ImageMagick6/commit/878f6315caa7d8b9f0c616147e71a2f2b25b1756)
- cosmetic [`3832fa1`](https://github.com/ImageMagick/ImageMagick6/commit/3832fa11c51785a611e7a7cc9c57073221ed7833)
- cosmetic [`47e1eab`](https://github.com/ImageMagick/ImageMagick6/commit/47e1eabbc7736a08aed1ec225a07357f65d19ede)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=33466 [`6cf7fd8`](https://github.com/ImageMagick/ImageMagick6/commit/6cf7fd8e84aedcdfb125120b230f5a1dcf781169)
- https://github.com/ImageMagick/ImageMagick/issues/3571 [`68a0f3f`](https://github.com/ImageMagick/ImageMagick6/commit/68a0f3f8b8e90190c78bc65403fc81192fb3da59)
- pending release [`e9740ab`](https://github.com/ImageMagick/ImageMagick6/commit/e9740ab2ea9ce835003966551ceebcae4ce16ff1)

## [6.9.12-8](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-7...6.9.12-8) - 2021-04-17

### Commits

- latest automake/autoconf [`1fb5916`](https://github.com/ImageMagick/ImageMagick6/commit/1fb5916a9010c993a6e77613310828e950c8959f)
- ... [`24030ed`](https://github.com/ImageMagick/ImageMagick6/commit/24030ed4a3009bac808989e4142942074308bd33)
- https://github.com/ImageMagick/ImageMagick/issues/3540 [`cd7f9fb`](https://github.com/ImageMagick/ImageMagick6/commit/cd7f9fb7751b0d59d5a74b12d971155caad5a792)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=33232 [`e699f55`](https://github.com/ImageMagick/ImageMagick6/commit/e699f559dfa912cf979893ab2cde9a0695218c30)
- https://github.com/ImageMagick/ImageMagick/issues/3537 [`5b0acdb`](https://github.com/ImageMagick/ImageMagick6/commit/5b0acdb5047fd322ea9ba3cbf7fe0718e3cda0af)
- https://github.com/ImageMagick/ImageMagick/issues/3549 [`0962d40`](https://github.com/ImageMagick/ImageMagick6/commit/0962d402b0af0d31d7267bb82f5460c53c54518e)
- https://github.com/ImageMagick/ImageMagick/issues/3520 [`0fcebd3`](https://github.com/ImageMagick/ImageMagick6/commit/0fcebd3e7a382830a8e56b98b3f67e06b4beadb3)
- write tiff colormapped images with an alpha channel as PHOTOMETRIC_RGB [`270494f`](https://github.com/ImageMagick/ImageMagick6/commit/270494f4ba392f230b2e816667416e5ac638e275)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=33350 [`0eccd35`](https://github.com/ImageMagick/ImageMagick6/commit/0eccd3556a8c456239a49f9064381ddc3e28476e)
- pending release [`e06e7ff`](https://github.com/ImageMagick/ImageMagick6/commit/e06e7ffbf1fa16039754558eac75a917bd827393)
- pending release [`e65db11`](https://github.com/ImageMagick/ImageMagick6/commit/e65db11090a270d7200adac080f623a7e75b1e96)

## [6.9.12-7](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-6...6.9.12-7) - 2021-04-11

### Merged

- fix perl syntax [`#144`](https://github.com/ImageMagick/ImageMagick6/pull/144)

### Commits

- ... [`b9a79ba`](https://github.com/ImageMagick/ImageMagick6/commit/b9a79ba19226ea0d5f81b61bb06b4b84f1bb7bcd)
- add a nonce to the signature generation [`d9600ec`](https://github.com/ImageMagick/ImageMagick6/commit/d9600ec25644b74d8be1bd432f280b2467c5e175)
- https://github.com/ImageMagick/ImageMagick/issues/3469 [`89f9691`](https://github.com/ImageMagick/ImageMagick6/commit/89f9691ab4fdfbb8cacbe6718a0e3b911982b0ff)
- https://github.com/ImageMagick/ImageMagick/issues/3469 [`75c05e1`](https://github.com/ImageMagick/ImageMagick6/commit/75c05e1a2b1763712a6d9ca9de237c0d9198647e)
- constrain sub-image list [`c4392ae`](https://github.com/ImageMagick/ImageMagick6/commit/c4392aee303fba6d5e813f8c2ae1b67c19b438cb)
- pending release [`e183af8`](https://github.com/ImageMagick/ImageMagick6/commit/e183af8ec3d8ce2d36e55beda63535052ff429ed)
- https://github.com/ImageMagick/ImageMagick/issues/3520 [`d4f04b4`](https://github.com/ImageMagick/ImageMagick6/commit/d4f04b4dfb783996b8f48c28d64c04ca8b8cd542)
- https://github.com/ImageMagick/ImageMagick6/issues/145 [`bc7f4f5`](https://github.com/ImageMagick/ImageMagick6/commit/bc7f4f54206f2053a45959e07704c7fc657e07aa)
- pending release [`b37dd2c`](https://github.com/ImageMagick/ImageMagick6/commit/b37dd2c732634c98c0beef253f3e03216cdb3fc0)
- https://github.com/ImageMagick/ImageMagick6/security/code-scanning/5?query=ref%3Arefs%2Fheads%2Fmain [`822e476`](https://github.com/ImageMagick/ImageMagick6/commit/822e4768034198ff0bcc41b551462295ca5baec6)
- https://github.com/ImageMagick/ImageMagick/issues/3520 [`bec4e2d`](https://github.com/ImageMagick/ImageMagick6/commit/bec4e2dabf96dd93ef0ca7bb384521acdcb4be1e)
- https://github.com/ImageMagick/ImageMagick/issues/3520 [`4c0a1d5`](https://github.com/ImageMagick/ImageMagick6/commit/4c0a1d5b7a230b84e2d420c592ce7bc355ebd785)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=33137 [`d94de13`](https://github.com/ImageMagick/ImageMagick6/commit/d94de132dce98a02dce3451dfc014d2286fa0d43)
- pending release [`8608fb1`](https://github.com/ImageMagick/ImageMagick6/commit/8608fb14228480364cda4080c1b2d3ed118d8b8d)
- ... [`e3ad231`](https://github.com/ImageMagick/ImageMagick6/commit/e3ad2313517d78a96b5bcfce1cd4ce37c9df8dba)
- ... [`0dbacf8`](https://github.com/ImageMagick/ImageMagick6/commit/0dbacf8c67e2788f3d13b6d9b442b72bfad2d055)
- revert patch [`3415a1d`](https://github.com/ImageMagick/ImageMagick6/commit/3415a1db1c4dfd8dc096f45c80f647e047da0cd8)
- pending release [`a14972b`](https://github.com/ImageMagick/ImageMagick6/commit/a14972b0323163a8a41e4e34213da2b277bce372)

## [6.9.12-6](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-5...6.9.12-6) - 2021-04-03

### Commits

- ... [`312df44`](https://github.com/ImageMagick/ImageMagick6/commit/312df44858c91c2b43c07f7bd7b61cea7332d31f)
- revert patch [`7703d3b`](https://github.com/ImageMagick/ImageMagick6/commit/7703d3b2c13e56cc7fe7ca004228e4e2d9b8067f)
- https://github.com/ImageMagick/ImageMagick/issues/3469 [`f8e4322`](https://github.com/ImageMagick/ImageMagick6/commit/f8e4322d169b0db00ca438c68bed0f4b5c5cabb5)
- https://github.com/ImageMagick/ImageMagick/issues/3469 [`fbecaf0`](https://github.com/ImageMagick/ImageMagick6/commit/fbecaf01e52c45465d2cfad8272bc578e469c953)
- pending release [`328bd1a`](https://github.com/ImageMagick/ImageMagick6/commit/328bd1a082a497239938910b4bff8b9bcc2cf768)
- Added missing null check. [`3f8f861`](https://github.com/ImageMagick/ImageMagick6/commit/3f8f8611b5cc7ba945eacc17ad801840b423c2c6)
- pending release [`0e74340`](https://github.com/ImageMagick/ImageMagick6/commit/0e74340c0adaa4370e971079c654fe405b57e607)
- https://github.com/ImageMagick/ImageMagick/security/code-scanning/30 [`cbc076e`](https://github.com/ImageMagick/ImageMagick6/commit/cbc076e95697faed2cfb1abcd60693b859135330)
- pending release [`7aab092`](https://github.com/ImageMagick/ImageMagick6/commit/7aab092ac4e77ec6d96fcfe74c53eaf3e6cf159d)
- prevent undefined-behavior issue reported by Hardik [`798838f`](https://github.com/ImageMagick/ImageMagick6/commit/798838f31c0112c10491bf2cf2a4d084be90e26f)
- pending release [`0f40ca2`](https://github.com/ImageMagick/ImageMagick6/commit/0f40ca207b30abfdd9e7c8868e6005c137c032b7)
- ... [`f2a5d86`](https://github.com/ImageMagick/ImageMagick6/commit/f2a5d8646472e4bc5cd0a18546db0a29d3b7795c)
- ... [`6c4bc78`](https://github.com/ImageMagick/ImageMagick6/commit/6c4bc786e900ef6ac08483d1cbe963ed3210eddf)
- pending release [`fd23993`](https://github.com/ImageMagick/ImageMagick6/commit/fd23993f35fbfb48353bdcf16da1767f13eb4e71)

## [6.9.12-5](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-4...6.9.12-5) - 2021-03-28

### Commits

- ... [`9a4bc34`](https://github.com/ImageMagick/ImageMagick6/commit/9a4bc34b4b985e7cf604dc58691e64c576d8c3bd)
- ... [`3e34aa8`](https://github.com/ImageMagick/ImageMagick6/commit/3e34aa8bdf295e0a9d1630eab6c45cbdc2d90d4f)
- fix c++ compiler exception [`0ec46fc`](https://github.com/ImageMagick/ImageMagick6/commit/0ec46fc805a5e7a4056b9614c7a994bfb39e53b0)
- eliminate C++ compile exception [`adda0fe`](https://github.com/ImageMagick/ImageMagick6/commit/adda0fe816d5098691aeec1b690d5178d4fe2a17)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=32322 [`c8f2595`](https://github.com/ImageMagick/ImageMagick6/commit/c8f25953ad1dd38a8b2d92738f0f742ad7e0bce7)
- latest beta release [`4981820`](https://github.com/ImageMagick/ImageMagick6/commit/498182048b243c1a20891edb69545832c8d17d80)
- Throw exception when no exception was raised but status was false (#3432). [`512668d`](https://github.com/ImageMagick/ImageMagick6/commit/512668dfd92b20d0d08b91d62b422d8262573281)
- https://github.com/ImageMagick/ImageMagick/issues/3428 [`4f47d5f`](https://github.com/ImageMagick/ImageMagick6/commit/4f47d5f43e7a776cb615433867945f86a556ae51)
- eliminate compiler warning [`6a5d357`](https://github.com/ImageMagick/ImageMagick6/commit/6a5d3575487487f2703383338bd17c8c25068f19)
- Disable OpenCL by default. [`9a5b074`](https://github.com/ImageMagick/ImageMagick6/commit/9a5b07493a639c063caaac334b2e664c2484df7d)
- fix handling of non-square images with -fft option [`ffa0d49`](https://github.com/ImageMagick/ImageMagick6/commit/ffa0d49a7556be8f5e9ebf9c14096e5a6102bff8)
- pending release [`8dc8e09`](https://github.com/ImageMagick/ImageMagick6/commit/8dc8e090e29c15161de42b62935b706a11e53477)
- pending release [`0be2e6a`](https://github.com/ImageMagick/ImageMagick6/commit/0be2e6a5063613c1ed795a863916ccc4481514ce)

## [6.9.12-4](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-3...6.9.12-4) - 2021-03-20

### Commits

- ... [`b7ed95d`](https://github.com/ImageMagick/ImageMagick6/commit/b7ed95d47f9a22fac2ab45769d7144fa988429ed)
- ... [`06d7298`](https://github.com/ImageMagick/ImageMagick6/commit/06d729858570caa124a24887cf723fe9679881d4)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=31872 [`2a56e44`](https://github.com/ImageMagick/ImageMagick6/commit/2a56e447a4a60a4b89fc8be0410a6db39d5e3de3)
- ... [`6d5f5d8`](https://github.com/ImageMagick/ImageMagick6/commit/6d5f5d8892fa316aad710521792d23fc7c783734)
- ... [`b13e1a8`](https://github.com/ImageMagick/ImageMagick6/commit/b13e1a86fdfc92aa7aa04bedbfa2e43f8c216667)
- https://github.com/ImageMagick/ImageMagick/discussions/3389 [`df6b526`](https://github.com/ImageMagick/ImageMagick6/commit/df6b5268be37616ab479b833fa78951a3bd4e8a1)
- ... [`fa69ed6`](https://github.com/ImageMagick/ImageMagick6/commit/fa69ed6f43ca120d9dfb5570330602de6badcf90)
- ... [`2204eb5`](https://github.com/ImageMagick/ImageMagick6/commit/2204eb57ae00b005b39165a47b8984eac01600a5)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=28891 [`f940ecb`](https://github.com/ImageMagick/ImageMagick6/commit/f940ecb921b7ab83da320334349f0cde1ff7f3e6)
- ... [`8a98e9f`](https://github.com/ImageMagick/ImageMagick6/commit/8a98e9ff9ee7455551aff6981b5d8503c507bfbc)
- avoid omp deadlock [`99ac197`](https://github.com/ImageMagick/ImageMagick6/commit/99ac1977da0883b78cd4e9b763f267e8bce389e8)
- pending release [`9b40562`](https://github.com/ImageMagick/ImageMagick6/commit/9b405621909fa2e67170178f795a115ddbe9e1db)
- ... [`21991f7`](https://github.com/ImageMagick/ImageMagick6/commit/21991f726e6a7505bf14f593033cc75533c8b783)
- pending release [`4ef5c73`](https://github.com/ImageMagick/ImageMagick6/commit/4ef5c73c83203e93b60a092e3bc74697a3310c7f)

## [6.9.12-3](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-2...6.9.12-3) - 2021-03-06

### Commits

- ... [`522b4a3`](https://github.com/ImageMagick/ImageMagick6/commit/522b4a3e5bd272873cdc81aa5fdffdc4c520d588)
- ... [`0370b8e`](https://github.com/ImageMagick/ImageMagick6/commit/0370b8e16fd3d7900005040d1663d676268ab1b3)
- slight adjustment to D65 illuminant [`1df11cf`](https://github.com/ImageMagick/ImageMagick6/commit/1df11cf4efb748e55d7366f46c6e3a847a742487)
- ... [`c51b249`](https://github.com/ImageMagick/ImageMagick6/commit/c51b2495fcfddc4b77908e2034ca1877c3b4a8bf)
- ... [`c498edc`](https://github.com/ImageMagick/ImageMagick6/commit/c498edcef55dea47d6c3c4f2636c467343299ec2)
- https://github.com/ImageMagick/ImageMagick/issues/3331 [`4eafab8`](https://github.com/ImageMagick/ImageMagick6/commit/4eafab89a2742865d770857a9d7434993f65ae6b)
- https://github.com/ImageMagick/ImageMagick/issues/3332 [`072d7b1`](https://github.com/ImageMagick/ImageMagick6/commit/072d7b10dbe74d1cf4ec0d008990c1a28c076f9e)
- https://github.com/ImageMagick/ImageMagick/issues/3333 [`366c970`](https://github.com/ImageMagick/ImageMagick6/commit/366c9708a7ca1256ee03d0d4addb2690ed42273f)
- https://github.com/ImageMagick/ImageMagick/issues/3334 [`1b3585f`](https://github.com/ImageMagick/ImageMagick6/commit/1b3585fb7adb4ced6609d58ce9c9feb43dffeaaf)
- https://github.com/ImageMagick/ImageMagick/issues/3335 [`ad492c7`](https://github.com/ImageMagick/ImageMagick6/commit/ad492c7ed4cf1cf285a7f6e2ee5a1e7cf24e73b2)
- https://github.com/ImageMagick/ImageMagick/issues/3336 [`5d33b8d`](https://github.com/ImageMagick/ImageMagick6/commit/5d33b8df73b0b1e40ee3fb7a334d28d929ae903c)
- https://github.com/ImageMagick/ImageMagick/issues/3337 [`4bf64fd`](https://github.com/ImageMagick/ImageMagick6/commit/4bf64fdd786728f372e8a701a663caa2774e7a23)
- https://github.com/ImageMagick/ImageMagick/issues/3338 [`4b5e026`](https://github.com/ImageMagick/ImageMagick6/commit/4b5e026c704d777efe9c2ead5dd68ca4fe3b2aa1)
- https://github.com/ImageMagick/ImageMagick/issues/3339 [`9a94877`](https://github.com/ImageMagick/ImageMagick6/commit/9a94877f7823b0b8a41d50638dd105229d91fa89)
- ... [`aa77b65`](https://github.com/ImageMagick/ImageMagick6/commit/aa77b657b123bf92843f96c610b85e1a389e8226)
- https://github.com/ImageMagick/ImageMagick/issues/3340 [`448f927`](https://github.com/ImageMagick/ImageMagick6/commit/448f9271ef479569fc46583b9aa4ddc5c962d867)
- pending release [`4a83315`](https://github.com/ImageMagick/ImageMagick6/commit/4a833158dd16e127e3ca042baed6b449630ec5e2)

## [6.9.12-2](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-1...6.9.12-2) - 2021-02-27

### Commits

- ... [`d945f43`](https://github.com/ImageMagick/ImageMagick6/commit/d945f43d0a103ec4af50816aab54ab3d3b574543)
- pending release [`588d323`](https://github.com/ImageMagick/ImageMagick6/commit/588d3230ca82c14f2de6e1e894311d9d4fcdb05d)
- check that image exists before we destroy it [`3418473`](https://github.com/ImageMagick/ImageMagick6/commit/34184739956fd739735d364ec5b15c2ee89568cf)
- ... [`4c08b0d`](https://github.com/ImageMagick/ImageMagick6/commit/4c08b0d598c753b5e0e5cc99be5c47c62323c6e0)
- pending release [`7d56434`](https://github.com/ImageMagick/ImageMagick6/commit/7d564341fe48bcab733188573e0e7d41674ad80c)
- pending release [`627cbd7`](https://github.com/ImageMagick/ImageMagick6/commit/627cbd7ea1e15ea2c9c0b7789e71b4e3a4aba962)
- fix compiler exception [`2e0bf51`](https://github.com/ImageMagick/ImageMagick6/commit/2e0bf51d81f5b9e5669699ace345330270991d00)
- pending release [`a9c2639`](https://github.com/ImageMagick/ImageMagick6/commit/a9c26392e18cf38d50621ab1719539cb7bf79a61)
- pending release [`c5e7a8b`](https://github.com/ImageMagick/ImageMagick6/commit/c5e7a8bbe66dd101d81f2bb16be232bfdb2d6d45)
- possible divide by zero + clear buffers [`e53e24b`](https://github.com/ImageMagick/ImageMagick6/commit/e53e24b078f7fa586f9cc910491b8910f5bdad2e)
- ... [`c8d0040`](https://github.com/ImageMagick/ImageMagick6/commit/c8d0040f8505ee16266dd57b3abda80d7f19fead)
- https://github.com/ImageMagick/ImageMagick/issues/3296 [`f1e68d2`](https://github.com/ImageMagick/ImageMagick6/commit/f1e68d22d1b35459421710587a0dcbab6900b51f)
- https://github.com/ImageMagick/ImageMagick/issues/3297 [`841138c`](https://github.com/ImageMagick/ImageMagick6/commit/841138cc282722a80e06977d683405a0cf1d78ef)
- cosmetic [`63d4768`](https://github.com/ImageMagick/ImageMagick6/commit/63d47686efceeeb4ee68daa01614aab76eecf07c)
- pending release [`309cf43`](https://github.com/ImageMagick/ImageMagick6/commit/309cf4397c0d3d9963af04aa9a56fe406446c656)
- https://github.com/ImageMagick/ImageMagick/issues/3317 [`bbb2dff`](https://github.com/ImageMagick/ImageMagick6/commit/bbb2dff98d0e97a0fe3f7e187855476c4590eed2)
- pending release [`abad074`](https://github.com/ImageMagick/ImageMagick6/commit/abad074de78b7a71afe8785b046885e0d16d75ce)
- https://github.com/ImageMagick/ImageMagick/issues/3320 [`b365302`](https://github.com/ImageMagick/ImageMagick6/commit/b3653027e9dc93d03917db602b83d15e70fee575)
- https://github.com/ImageMagick/ImageMagick/issues/3321 [`64c0cc2`](https://github.com/ImageMagick/ImageMagick6/commit/64c0cc234280544dabacc2b28017521851deebde)
- pending release [`eb69a8a`](https://github.com/ImageMagick/ImageMagick6/commit/eb69a8adc86a9b6a43d81f39b20a33f6a74d0013)

## [6.9.12-1](https://github.com/ImageMagick/ImageMagick6/compare/6.9.12-0...6.9.12-1) - 2021-02-21

### Commits

- ... [`7854805`](https://github.com/ImageMagick/ImageMagick6/commit/7854805a0e012213dad5b813e0de78799348f255)
- https://github.com/ImageMagick/ImageMagick/pull/3241 [`a19d95d`](https://github.com/ImageMagick/ImageMagick6/commit/a19d95d36f92b4266364fa6bbcea3e2cc0da712d)
- ... [`90510e0`](https://github.com/ImageMagick/ImageMagick6/commit/90510e0d208d498650ff6400fd405bdf1711e082)
- https://github.com/ImageMagick/ImageMagick/issues/3242 [`68ce241`](https://github.com/ImageMagick/ImageMagick6/commit/68ce2418726f566e43624f2ef1906d86746c8c2e)
- ... [`ea03af8`](https://github.com/ImageMagick/ImageMagick6/commit/ea03af8be5183f7a2fda2afad06e4e9a0a75893b)
- https://github.com/ImageMagick/ImageMagick/issues/3258 [`d285259`](https://github.com/ImageMagick/ImageMagick6/commit/d2852597c575cad62a65ed6edeeb8f5a36077add)
- ... [`268dc9f`](https://github.com/ImageMagick/ImageMagick6/commit/268dc9f87749044cc2de2e384128e6a4aed06669)
- ... [`f27cfb1`](https://github.com/ImageMagick/ImageMagick6/commit/f27cfb112338057f8fac5d6b016b3c69fb119b84)
- https://github.com/ImageMagick/ImageMagick/issues/3259 [`e6a300e`](https://github.com/ImageMagick/ImageMagick6/commit/e6a300ef2da27bcf767fdc9f43aea9bb73054b33)
- pending release [`05fc76c`](https://github.com/ImageMagick/ImageMagick6/commit/05fc76c3de140ab0ee5438b6be2d52bd5d8c323a)

## [6.9.12-0](https://github.com/ImageMagick/ImageMagick6/compare/6.9.11-62...6.9.12-0) - 2021-02-13

### Commits

- ... [`efb5ce8`](https://github.com/ImageMagick/ImageMagick6/commit/efb5ce8710604e7b86014a70e91d0372a3930b5b)
- bump minor release [`9f1d23f`](https://github.com/ImageMagick/ImageMagick6/commit/9f1d23fa325165a3426ba401b552e65397384e96)
- ... [`37d7edf`](https://github.com/ImageMagick/ImageMagick6/commit/37d7edfc6b4f7270a9539c14541a7d1d7358b6f2)
- cosmetic [`c8922ae`](https://github.com/ImageMagick/ImageMagick6/commit/c8922ae40e995f93654eeeeb90266867e4a00154)
- ... [`5d2e553`](https://github.com/ImageMagick/ImageMagick6/commit/5d2e553ff197322676b36c32da7079d2f6e41633)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=30839 [`6f604e9`](https://github.com/ImageMagick/ImageMagick6/commit/6f604e9cc06ea1291b6932fa7786c3a01306c424)
- ... [`dfd1d7f`](https://github.com/ImageMagick/ImageMagick6/commit/dfd1d7f43c68c4449a1e8666ea6087ff4ff17a05)
- ... [`0824c17`](https://github.com/ImageMagick/ImageMagick6/commit/0824c17ef4405641322bab4c9d717a30b6c80162)
- ... [`d886aa5`](https://github.com/ImageMagick/ImageMagick6/commit/d886aa509b6258e5312d28d4c106803491f31d92)
- https://bugs.chromium.org/p/oss-fuzz/issues/detail?id=30896 [`b322ab0`](https://github.com/ImageMagick/ImageMagick6/commit/b322ab0074a86cc62073a2b577ef21907f3111d7)
- update docs [`dab48ba`](https://github.com/ImageMagick/ImageMagick6/commit/dab48bafd2924a7349df9bdc1ce8c36fab893bc2)
- pending release [`769536d`](https://github.com/ImageMagick/ImageMagick6/commit/769536d06c3dc2171aac1ddd36a01edfa16b1977)
