<?php 
	include "blocks/header.php";
?>
<section class="main-catalog">
    <div class="container">
    <form action="#" method="post">
        <div class="row">
            <div class="col-lg-3">
                <div class="main-filters">
                    <div class="cost-block">
                        <h3>Стоимость, руб</h3>
                        <div class="filter-line"></div>
                        <input type="range">
                        <input type="text" name="low-cost" placeholder="100">
                        <div class="divide"></div>
                        <input type="text" name="high-cost" placeholder="1000">
                    </div>
                    <div class="brand-block">
                        <h3>Бренд</h3>
                        <div class="filter-line">
                        </div>  
                        <label>
                            <input class="checkbox" type="checkbox" name="oculus" checked>
                            <span class="checkbox-custom"></span>
                            <span class="label">Oculus</span>
                            <span class="amount">15</span>
                        </label>
                        <label>
                            <input class="checkbox" type="checkbox" name="sony">
                            <span class="checkbox-custom"></span>
                            <span class="label">Sony</span>
                            <span class="amount">32</span>
                        </label>
                        <label>
                            <input class="checkbox" type="checkbox" name="samsung">
                            <span class="checkbox-custom"></span>
                            <span class="label">Samsung</span>
                            <span class="amount">5</span>
                        </label>
                        <label>
                            <input class="checkbox" type="checkbox" name="hp">
                            <span class="checkbox-custom"></span>
                            <span class="label">HP</span>
                            <span class="amount">12</span>
                        </label>
                        <label>
                            <input class="checkbox" type="checkbox" name="acer">
                            <span class="checkbox-custom"></span>
                            <span class="label">Acer</span>
                            <span class="amount">3</span>
                        </label>
                        <label>
                            <input class="checkbox" type="checkbox" name="htc">
                            <span class="checkbox-custom"></span>
                            <span class="label">HTC Vive</span>
                            <span class="amount">50</span>
                        </label>
                    </div>
                    <div class="resolution">
                        <h3>Разрешение дисплея</h3>
                        <label>
                            <input class="checkbox" type="checkbox" name="1920x1080">
                                <span class="checkbox-custom"></span>
                                <span class="label">1920x1080</span>
                                <span class="amount"></span>
                        </label>
                        <label>
                            <input class="checkbox" type="checkbox" name="2880x1600">
                                <span class="checkbox-custom"></span>
                                <span class="label">2880x1600</span>
                                <span class="amount"></span>
                        </label>
                        <label>
                            <input class="checkbox" type="checkbox" name="2880x1440">
                                <span class="checkbox-custom"></span>
                                <span class="label">2880x1440</span>
                                <span class="amount">14</span>
                        </label>
                        <label>
                            <input class="checkbox" type="checkbox" name="2560x1440">
                                <span class="checkbox-custom"></span>
                                <span class="label">2560x1440</span>
                                <span class="amount">12</span>
                        </label>
                        <label>
                            <input class="checkbox" type="checkbox" name="1280x720">
                                <span class="checkbox-custom"></span>
                                <span class="label">1280x720</span>
                                <span class="amount"></span>
                        </label>
                        <label>
                            <input class="checkbox" type="checkbox" name="800x480">
                                <span class="checkbox-custom"></span>
                                <span class="label">800x480</span>
                                <span class="amount"></span>
                        </label>
                        <a href="#" class="more">Еще</a>
                    </div>
                    <div class="compatibility">
                        <h3>Совместимость</h3>
                        <label>
                            <input class="checkbox" type="checkbox" name="pc">
                                <span class="checkbox-custom"></span>
                                <span class="label">Для ПК</span>
                                <span class="amount">112</span>
                        </label>
                        <label>
                            <input class="checkbox" type="checkbox" name="phones">
                                <span class="checkbox-custom"></span>
                                <span class="label">Для смартфонов</span>
                                <span class="amount">98</span>
                        </label>
                        <label>
                            <input class="checkbox" type="checkbox" name="consoles">
                                <span class="checkbox-custom"></span>
                                <span class="label">Для консолей</span>
                                <span class="amount">90</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="catalog-block">
                    <div class="sort-block">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="changed-filters">
                                    <a href="#">от 800 до 455 00 руб <span class="delete"></span></a>
                                    <a href="#">Oculus <span class="delete"></span></a>
                                    <a href="#">2880x1440 <span class="delete"></span></a>
                                    <a class="reset-filters" href="#">Сбросить</a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="sort-filters">
                                    <select id="sortby" name="sortby">
                                        <option value="popular">По популярности</option>
                                        <option value="tohigh">По возрастанию</option>
                                        <option value="tolow">По убыванию</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <ul>
                            <li class="item">
                                <a href="#">
                                    <div class="img-block">
                                        <img src="img/popitem1.png">
                                    </div>
                                    <h3>Sony Wireless Speaker</h3>
                                </a>
                                <div class="about">
                                    <p class="description">Наслаждайтесь трехмерным звуком с режимом LIVE</p>
                                    <div class="block">
                                        <p class="price">12 790 руб</p>
                                        <div class="color-block">
                                            <button type="button" class="gray">
                                                
                                            </button>
                                            <button type="button" class="red">
                                                
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <div class="img-block">
                                        <img src="img/popitem2.png">
                                    </div>
                                    <h3>Oculus Rift Dev Kit-G03</h3>
                                </a>
                                <div class="about">
                                    <p class="description">Погрузись в виртуальную реальность с Oculus Rift</p>
                                    <div class="block">
                                        <p class="price">53 990 руб</p>
                                        <div class="color-block">
                                            <button type="button" class="gray">
                                                
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <div class="img-block">
                                        <img src="img/popitem3.png">
                                    </div>
                                    <h3>Nvidia Shield Controller</h3>
                                </a>
                                <div class="about">
                                    <p class="description">Новое поколения игровых контроллеров от Nvidia</p>
                                    <div class="block">
                                        <p class="price">5 090 руб</p>
                                        <div class="color-block">
                                            <button type="button" class="gray">
                                                
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <div class="img-block">
                                        <img src="img/popitem4.png">
                                    </div>
                                    <h3>Lapel Cam-H03</h3>
                                </a>
                                <div class="about">
                                    <p class="description">Сенсорная камера для ПК и телевизоров</p>
                                    <div class="block">
                                        <p class="price">11 440 руб</p>
                                        <div class="color-block">
                                            <button type="button" class="light-gray">
                                                
                                            </button>
                                            <button type="button" class="gray">
                                                
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <div class="img-block">
                                        <img src="img/popitem5.png">
                                    </div>
                                    <h3>Аттракцион Ray’s Bike</h3>
                                </a>
                                <div class="about">
                                    <p class="description">Наслаждайтесь трехмерным звуком с режимом LIVE</p>
                                    <div class="block">
                                        <p class="price">389 500 руб</p>
                                        <div class="color-block">
                                            <button type="button" class="gray">
                                                
                                            </button>
                                            <button type="button" class="orange">
                                                
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <div class="img-block">
                                        <img src="img/popitem6.png">
                                    </div>
                                    <h3>HoloLens AR Headset</h3>
                                </a>
                                <div class="about">
                                    <p class="description">Наслаждайтесь трехмерным звуком с режимом LIVE</p>
                                    <div class="block">
                                        <p class="price">259 990 руб</p>
                                        <div class="color-block">
                                            <button type="button" class="blue">
                                                
                                            </button>
                                            <button type="button" class="gray">
                                                
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <div class="img-block">
                                        <img src="img/popitem7.png">
                                    </div>
                                    <h3>Камера 360</h3>
                                </a>
                                <div class="about">
                                    <p class="description">Камера с возможностью записи в 360</p>
                                    <div class="block">
                                        <p class="price">19 700 руб</p>
                                        <div class="color-block">
                                            <button type="button" class="gray">
                                                
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item item-sale">
                                <a href="#">
                                    <div class="sale-number">-47%</div>
                                    <div class="banner-block">
                                        <h3>Oculus Rift DK 2</h3>
                                        <div class="about">
                                            <p class="description">Воплощение качества и симбиоз<br>технологий</p>
                                            <div class="block">
                                                <p class="price">19 700 руб</p>
                                                <p class="old-price">34 900 руб</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <div class="img-block">
                                        <img src="img/popitem8.png">
                                    </div>
                                    <h3>Аттракцион StarWars</h3>
                                </a>
                                <div class="about">
                                    <p class="description">Аттракцион виртуальной реальности Tie Fihgter </p>
                                    <div class="block">
                                        <p class="price">3 615 000 руб</p>
                                        <div class="color-block">
                                            <button type="button" class="gray">
                                                
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <div class="img-block">
                                        <img src="img/popitem9.png">
                                    </div>
                                    <h3>HTC Vive-H15</h3>
                                </a>
                                <div class="about">
                                    <p class="description">Контроллер совершенно нового поколения</p>
                                    <div class="block">
                                        <p class="price">19 900 руб</p>
                                        <div class="color-block">
                                            <button type="button" class="light-gray">
                                                
                                            </button>
                                            <button type="button" class="gray">
                                                
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <div class="img-block">
                                        <img src="img/popitem10.png">
                                    </div>
                                    <h3>Xbox One Kinect-G11</h3>
                                </a>
                                <div class="about">
                                    <p class="description">Сенсорный игровой контроллер</p>
                                    <div class="block">
                                        <p class="price">7 530 руб</p>
                                        <div class="color-block">
                                            <button type="button" class="gray">
                                                
                                            </button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<?php 
	include "blocks/footer.php"
?>