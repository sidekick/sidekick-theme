<?php
/**
 * @author oke.ugwu
 */

namespace Themed\Sidekick;

use Cubex\Theme\BaseTheme;

class SidekickTheme extends BaseTheme
{
  protected function _initiate()
  {
    $this->requireCssLibrary("bootstrap", "2");
    $this->requireCss("/bs-reset");
    $this->requireCss("/base");

    $this->requireJsLibrary("jquery");
    $this->requireJsLibrary("bootstrap", "2");
    $this->requireJsPackage("bootstrap");
    $this->requireJs("/base");
  }
}
