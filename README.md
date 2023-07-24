snap-downloader
=
snapchat downloader PHP

Basic usage
-

```php
$getSnaps = getSnaps("https://snapchat.com/add/username");
print_r($getSnaps);

// output
Array
(
    [0] => https://cf-st.sc-cdn.net/o/uDIaQDtH86Dye4vwJsH7.1023.IRZXSOY?mo=Gr8BGggaABoAUEtgAVoRUG9wdWxhckltYWdlU3RvcnmiASII_wciHQoQMgEPOgEJQgYI0Zb0pQZIAhIAKgdJUlpYU09ZogEiCOcHIh0KEDIBDzoBCUIGCNKW9KUGSAISACoHSVJaWFNPWaIBIgjmByIdChAyAQ86AQlCBgjSlvSlBkgCEgAqB0lSWlhTT1miAQsIASIHCgUyASVIBKIBIgjUByIdChAyA86AQlCBgjRlvSlBkgCEgAqB0lSWlhTT1k%3D&uc=75
    [1] => https://cf-st.sc-cdn.net/i/cIFHAtv1MXAmBCqyQybTi.1034.IRZXSOY?mo=Gk0aGBoAGgAyAQk6AQ9CBgijrPSlBkgEUEtgAaBMAiKCBIeChwgAUoYChM1FBYoGxYZGRwiHyMlIiQcKR8eEPQDIgsSACoHSVJaWFNPWQ%3D%3D&uc=75
    [2] => https://bolt-gcdn.sc-cdn.net/z/3olViunsUW9ZZxDfK0AYG.1034.IRZXSOY?mo=Gk4aGRoAGgAyAXk6AgkPQgYIlqz0pQZIBFBLAGiATAIiggSHgocIAFKGAoTOScTFBIkJBcdExQWGh4cFxwZFRD0AyILEgAqB0lSWlhTT1k%3D&uc=75
)
```