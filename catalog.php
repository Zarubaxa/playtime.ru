<?php 
	include "blocks/header.php";
?>
<section class="man-catalog">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="main-filters">
                    <form action="#" method="post">
                        <div class="cost-block">
                            <h3>Стоимость</h3>
                            <div class="filter-line">
                            <input type="range">
                            <input type="text" name="low-cost" placeholder="100">
                            <input type="text" name="high-cost" placeholder="1000">
                            </div>
                        </div>
                        <div class="brand-block">
                            <h3>Стоимость</h3>
                            <div class="filter-line">
                                <label>
                                    <input type="checkbox" name="oculus"> Oculus <span class="amount">15</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="sony"> Sony <span class="amount">15</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="Samsung"> Samsung <span class="amount">15</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="HP"> HP <span class="amount">15</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="acer"> Acer <span class="amount">15</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="htcvive"> HTC Vive <span class="amount">15</span>
                                </label>
                            </div>
                        </div>
                        <div class="resolution">
                            <h3>Разрешение</h3>
                            <label>
                                <input type="checkbox" name="1920x1080"> 1920x1080 <span class="amount"></span>
                            </label>
                            <label>
                                <input type="checkbox" name="2880x1600"> 2880x1600 <span class="amount"></span>
                            </label>
                            <label>
                                <input type="checkbox" name="2880x1440"> 2880x1440 <span class="amount">14</span>
                            </label>
                            <label>
                                <input type="checkbox" name="2560x1440"> 2560x1440 <span class="amount">12</span>
                            </label>
                            <label>
                                <input type="checkbox" name="1280x720"> 1280x720 <span class="amount"></span>
                            </label>
                            <label>
                                <input type="checkbox" name="800x480"> 800x480 <span class="amount"></span>
                            </label>
                            <a href="#" class="more">Еще</a>
                        </div>
                        <div class="compatibility">
                            <h3>Совместимость</h3>
                            <label>
                                <input type="checkbox" name="pc"> Для ПК <span class="amount">112</span>
                            </label>
                            <label>
                                <input type="checkbox" name="phones"> Для смартфонов <span class="amount">98</span>
                            </label>
                            <label>
                                <input type="checkbox" name="consoles"> Для консолей <span class="amount">90</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="sort-filters">
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
	include "blocks/footer.php"
?>