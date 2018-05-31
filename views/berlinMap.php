<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.rwdImageMaps.min.js"></script>
        <script src="../js/custom.js"></script>
        <script src="../js/jquery.maphilight.js.js"></script>
        <title>Berliner Wahlen visualizR</title>
    </head>
    <body>
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-content">
                            <h1 class="title">visualizR</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="map-wrapper">
                        <!-- <img class="berlin-map" src="img/map.png"/> -->
                        <img class="berlin-map" src="../img/map.png" usemap="#image-map">

                        <map name="image-map">
                            <area data-maphilight='{"strokeColor":"0000ff","strokeWidth":5,"fillColor":"00ff00","fillOpacity":0.6}' target="_self" alt="Spandau" title="Spandau" href="#" coords="420,445,423,493,441,514,448,544,455,565,519,620,566,623,579,652,575,669,587,678,602,694,602,710,591,708,579,715,554,715,540,724,503,717,506,736,485,728,453,729,436,729,425,747,432,782,418,791,418,805,404,805,395,825,398,837,372,849,360,848,344,860,344,876,333,895,342,927,338,955,340,982,331,1022,209,1111,158,1123,148,1109,117,1075,128,1061,128,1037,119,1029,125,1012,116,1005,132,992,139,975,140,952,170,946,231,867,287,809,261,791,229,770,220,772,215,759,183,766,144,772,148,756,146,708,160,676,163,643,176,592,192,606,208,609,222,599,220,572,225,554,232,542,232,530,241,524,241,493,234,473,206,480,183,486,179,466,172,449,190,449,199,438,213,440,231,429,248,404,271,397,291,406,299,415,310,410,330,420,344,431,368,438,381,447,390,436" shape="poly">
                            <area target="_self" alt="Reinickendorf" title="Reinickendorf" href="#" coords="520,622,455,569,449,558,449,544,448,533,439,526,444,516,421,496,418,443,423,431,419,417,402,406,388,392,381,374,373,367,373,357,386,351,409,304,418,295,425,277,426,260,441,260,455,265,471,263,488,256,501,265,513,263,543,260,552,270,554,228,547,214,545,201,568,208,577,201,585,208,603,200,607,166,612,150,600,148,605,109,631,118,651,118,668,113,679,125,654,145,676,189,677,200,667,207,665,219,679,240,681,253,660,263,686,260,704,268,721,267,752,284,762,279,792,277,794,284,805,281,820,277,838,272,856,305,863,330,866,355,852,394,819,433,787,433,870,514,884,516,898,528,902,540,889,539,868,572,854,570,838,583,835,565,822,570,819,563,792,563,761,551,741,565,729,562,725,570,681,583,656,627" shape="poly">
                        </map>
                        <p class="img-caption">Kleine Dateninfo zur Karte</p>
                    </div>
                </div>
                <div class="col-md-12 parteifilter-wrapper">
                    <div class="filter-title">
                        <h1>Parteifilter:</h1>
                    </div>
                    <div class="row">
                    <div class="col-md-3">
                        <ul class="filters">
                            <li>
                                <input type="checkbox" value="1" id="parteifilter1" />
                                <label for="parteifilter1">Partei1</label>
                            </li>
                            <li>
                                <input type="checkbox" value="2" id="parteifilter2" />
                                <label for="parteifilter2">Partei2</label>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="filters">
                            <li>
                                <input type="checkbox" value="3" id="parteifilter3" />
                                <label for="parteifilter3">Partei3</label>
                            </li>
                            <li>
                                <input type="checkbox" value="4" id="parteifilter4" />
                                <label for="parteifilter4">Partei4</label>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="filters">
                            <li>
                                <input type="checkbox" value="5" id="parteifilter5" />
                                <label for="parteifilter5">Partei5</label>
                            </li>
                            <li>
                                <input type="checkbox" value="6" id="parteifilter6" />
                                <label for="parteifilter6">Partei6</label>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="filters">
                            <li>
                                <input type="checkbox" value="7" id="filter7" />
                                <label for="filter7">Partei7</label>
                            </li>
                            <li>
                                <input type="checkbox" value="8" id="filter8" />
                                <label for="filter8">Partei8</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 bezirkfilter-wrapper">
                <div class="filter-title">
                    <h1>Bezirkfilter:</h1>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="filters">
                            <li>
                                <input type="checkbox" value="1" id="bezirkfilter1" />
                                <label for="bezirkfilter1">Mitte</label>
                            </li>
                            <li>
                                <input type="checkbox" value="2" id="bezirkfilter2" />
                                <label for="bezirkfilter2">Friedrichshain-Kreuzberg</label>
                            </li>
                            <li>
                                <input type="checkbox" value="3" id="bezirkfilter3" />
                                <label for="bezirkfilter3">Pankow</label>
                            </li>
                            <li>
                                <input type="checkbox" value="4" id="bezirkfilter4" />
                                <label for="bezirkfilter4">Charlottenburg-Wilmersdorf</label>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="filters">
                            <li>
                                <input type="checkbox" value="5" id="bezirkfilter5" />
                                <label for="bezirkfilter5">Spandau</label>
                            </li>
                            <li>
                                <input type="checkbox" value="6" id="bezirkfilter6" />
                                <label for="bezirkfilter6">Steglitz-Zehlendorf</label>
                            </li>
                            <li>
                                <input type="checkbox" value="7" id="bezirkfilter7" />
                                <label for="bezirkfilter7">Tempelhof-Schöneberg</label>
                            </li>
                            <li>
                                <input type="checkbox" value="8" id="bezirkfilter8" />
                                <label for="bezirkfilter8">Neukölln</label>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="filters">
                            <li>
                                <input type="checkbox" value="9" id="bezirkfilter9" />
                                <label for="bezirkfilter9">Treptow-Köpenick</label>
                            </li>
                            <li>
                                <input type="checkbox" value="10" id="bezirkfilter10" />
                                <label for="bezirkfilter10">Marzahn-Hellersdorf</label>
                            </li>
                            <li>
                                <input type="checkbox" value="11" id="bezirkfilter11" />
                                <label for="bezirkfilter11">Lichtenberg (Hohenschönhausen)</label>
                            </li>
                            <li>
                                <input type="checkbox" value="12" id="bezirkfilter12" />
                                <label for="bezirkfilter12">Reinickendorf</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!---
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-content">
                            Hier kommt der Footer Content rein! :----)
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        --->
    </body>
</html>