<div>

<p class="lead">ImageMagick returns a status of 0 whenever a command or algorithm successfully complete without complaint.  A warning code generally is typically just a notice that something unusual occurred but the command or algorithm still completed and most likely the results are still usable.  An error means the command or algorithm could not complete as expected and any results are unreliable.  A fatal error means the command or algorithm could not complete and the process exits prematurely and no results are returned.</p>

<table class="table table-sm table-hover table-striped table-responsive caption-top">
  <caption>ImageMagick Error and Warning Codes</caption>
  <thead>
  <tr>
    <th>Domain</th>
    <th>Description</th>
    <th>Warning</th>
    <th>Error</th>
    <th>Fatal Error</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>Success</td>
    <td>the command or algorithm completed successfully without complaint</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
  </tr>

  <tr>
    <td>Resource Limit</td>
    <td>a program resource is exhausted (e.g. not enough memory)</td>
    <td>300</td>
    <td>400</td>
    <td>700</td>
  </tr>

  <tr>
    <td>Type</td>
    <td>A font is unavailable; a substitution may have occurred</td>
    <td>305</td>
    <td>405</td>
    <td>705</td>
  </tr>

  <tr>
    <td>Option</td>
    <td>a command-line option was malformed</td>
    <td>310</td>
    <td>410</td>
    <td>710</td>
  </tr>

  <tr>
    <td>Delegate</td>
    <td>an ImageMagick <i>delegate</i> failed to complete</td>
    <td>315</td>
    <td>415</td>
    <td>715</td>
  </tr>

  <tr>
    <td>Missing Delegate</td>
    <td>the image type can not be read or written because the appropriate <i>Delegate</i> is missing</td>
    <td>320</td>
    <td>420</td>
    <td>720</td>
  </tr>

  <tr>
    <td>Corrupt Image</td>
    <td>the image file may be corrupt</td>
    <td>325</td>
    <td>425</td>
    <td>725</td>
  </tr>

  <tr>
    <td>FileOpen</td>
    <td>the image file could not be opened for reading or writing</td>
    <td>330</td>
    <td>430</td>
    <td>730</td>
  </tr>

  <tr>
    <td>Blob</td>
    <td>a binary large object could not be allocated, read, or written</td>
    <td>335</td>
    <td>435</td>
    <td>735</td>
  </tr>

  <tr>
    <td>Stream</td>
    <td>there was a problem reading or writing from a stream</td>
    <td>340</td>
    <td>440</td>
    <td>740</td>
  </tr>

  <tr>
    <td>Cache</td>
    <td>pixels could not be read or written to the pixel cache</td>
    <td>345</td>
    <td>445</td>
    <td>745</td>
  </tr>

  <tr>
    <td>Coder</td>
    <td>there was a problem with an image coder</td>
    <td>350</td>
    <td>450</td>
    <td>750</td>
  </tr>

  <tr>
    <td>Module</td>
    <td>there was a problem with an image module</td>
    <td>355</td>
    <td>455</td>
    <td>755</td>
  </tr>

  <tr>
    <td>Draw</td>
    <td>a drawing operation failed</td>
    <td>360</td>
    <td>460</td>
    <td>760</td>
  </tr>

  <tr>
    <td>Image</td>
    <td>the operation could not complete due to an incompatible image</td>
    <td>365</td>
    <td>465</td>
    <td>765</td>
  </tr>

  <tr>
    <td>Wand</td>
    <td>there was a problem specific to the MagickWand API</td>
    <td>370</td>
    <td>470</td>
    <td>770</td>
  </tr>

  <tr>
    <td>Random</td>
    <td>there is a problem generating a true or pseudo-random number</td>
    <td>375</td>
    <td>475</td>
    <td>775</td>
  </tr>

  <tr>
    <td>XServer</td>
    <td>an X resource is unavailable</td>
    <td>380</td>
    <td>480</td>
    <td>780</td>
  </tr>

  <tr>
    <td>Monitor</td>
    <td>there was a problem activating the progress monitor</td>
    <td>385</td>
    <td>485</td>
    <td>785</td>
  </tr>

  <tr>
    <td>Registry</td>
    <td>there was a problem getting or setting the registry</td>
    <td>390</td>
    <td>490</td>
    <td>790</td>
  </tr>

  <tr>
    <td>Configure</td>
    <td>there was a problem getting a configuration file</td>
    <td>395</td>
    <td>495</td>
    <td>795</td>
  </tr>

  <tr>
    <td>Policy</td>
    <td>a policy denies access to a delegate, coder, filter, path, or resource.</td>
    <td>399</td>
    <td>499</td>
    <td>799</td>
  </tr>
  </tbody>
</table>

</div>
