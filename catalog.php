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
                            </label>
                        </div>
                        <div class="resolution">
                            <h3>Разрешение</h3>
                            <input type="checkbox">
                            1212
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