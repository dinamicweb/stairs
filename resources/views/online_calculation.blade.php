@extends('layouts.app_page')

@section('page-title', 'Онлайн-расчёт')

@section('center')
    <div class="center">
        <p class="about">Online-расчёт</p>
        <div class="tabs_block">
            <ul class="tabs">
                <li class="send_phone on_calc">Деревянные</li>
                <li class="send_phone on_calc">Металлические</li>
                <li class="send_phone on_calc">Бетонные</li>
            </ul>
            <div class="box visible">
                <p class="wood_p">Выберите породу древесины:</p>
                <select name="" class="dropdown">
                    <option class="label" value=""></option>
                    <option value="1">Сосна</option>
                    <option value="2">Лиственница</option>
                </select>
                <p class="warning">Данный расчёт является приблизительным. Если цена лестницы вас устроила, позвоните нам по одному из указанных телефонов, или пошлите сообщение по электронной почте: <a href="mailto:brlest@rambler.ru">brlest@rambler.ru</a></p>

                <div class="selection">
                    <div class="sel">
                        <input class="radio_sel" type="radio" name="stairs_style" id="radio_1">
                        <label for="radio_1" class="radio_label">90</label>
                        <img src="images/wood_1.jpg" alt="">
                    </div>

                    <div class="sel">
                        <input class="radio_sel" type="radio" name="stairs_style" id="radio_2">
                        <label for="radio_2" class="radio_label">180</label>
                        <img src="images/wood_2.jpg" alt="">
                    </div>

                    <div class="sel">
                        <input class="radio_sel " type="radio" name="stairs_style" id="radio_3">
                        <label for="radio_3" class="radio_label last">П-образная</label>
                        <img src="images/wood_3.jpg" alt="">
                    </div>
                </div>

                <div class="wh_div">
                    <p class="wh">Ширина лестницы</p>
                    <input class="input on_calc_inp whi" type="text">
                    <p class="mm">(мм)</p>
                </div>

                <div class="wh_div">
                    <p class="wh">Высота лестницы</p>
                    <input class="input on_calc_inp whi" type="text">
                    <p class="mm">(мм)</p>
                </div>

                <div class="radioclass">
                    <input class="rad_work" type="radio" name="stairs_work" id="stairs_work_1_1">
                    <label class="radio_label_bot" for="stairs_work_1_1">подступенок</label>
                    <input class="rad_work" type="radio" name="stairs_work" id="stairs_work_1_2">
                    <label class="radio_label_bot" for="stairs_work_1_2">тонировка</label>
                    <input class="rad_work" type="radio" name="stairs_work" id="stairs_work_1_3">
                    <label class="radio_label_bot" for="stairs_work_1_3">лакировка</label>
                    <input class="rad_work" type="radio" name="stairs_work" id="stairs_work_1_4">
                    <label class="radio_label_bot" for="stairs_work_1_4">установка</label>
                </div>
                <button class="send_phone on_calc" type="submit">Посчитать</button>
                <p class="price">Цена лестницы: 65000 рублей</p>
            </div>
            <div class="box">
                <p class="wood_p">Выберите породу древесины:</p>
                <select name="" class="dropdown">
                    <option class="label" value=""></option>
                    <option value="1">Сосна</option>
                    <option value="2">Лиственница</option>
                </select>
                <p class="warning">Данный расчёт является приблизительным. Если цена лестницы вас устроила, позвоните нам по одному из указанных телефонов, или пошлите сообщение по электронной почте: <a href="mailto:brlest@rambler.ru">brlest@rambler.ru</a></p>

                <div class="selection">
                    <div class="sel">
                        <input class="radio_sel" type="radio" name="stairs_style" id="radio_1_1">
                        <label for="radio_1_1" class="radio_label">90</label>
                        <img src="images/wood_1.jpg" alt="">
                    </div>

                    <div class="sel">
                        <input class="radio_sel" type="radio" name="stairs_style" id="radio_1_2">
                        <label for="radio_1_2" class="radio_label">180</label>
                        <img src="images/wood_2.jpg" alt="">
                    </div>

                    <div class="sel">
                        <input class="radio_sel " type="radio" name="stairs_style" id="radio_1_3">
                        <label for="radio_1_3" class="radio_label last">П-образная</label>
                        <img src="images/wood_3.jpg" alt="">
                    </div>
                </div>

                <div class="wh_div">
                    <p class="wh">Ширина лестницы</p>
                    <input class="input on_calc_inp whi" type="text">
                    <p class="mm">(мм)</p>
                </div>

                <div class="wh_div">
                    <p class="wh">Высота лестницы</p>
                    <input class="input on_calc_inp whi" type="text">
                    <p class="mm">(мм)</p>
                </div>

                <div class="radioclass">
                    <input class="rad_work" type="radio" name="stairs_work" id="stairs_work_2_1">
                    <label class="radio_label_bot" for="stairs_work_2_1">подступенок</label>
                    <input class="rad_work" type="radio" name="stairs_work" id="stairs_work_2_2">
                    <label class="radio_label_bot" for="stairs_work_2_2">тонировка</label>
                    <input class="rad_work" type="radio" name="stairs_work" id="stairs_work_2_3">
                    <label class="radio_label_bot" for="stairs_work_2_3">лакировка</label>
                    <input class="rad_work" type="radio" name="stairs_work" id="stairs_work_2_4">
                    <label class="radio_label_bot" for="stairs_work_2_4">установка</label>
                </div>
                <button class="send_phone on_calc" type="submit">Посчитать</button>
                <p class="price">Цена лестницы: 65000 рублей</p>
            </div>
            <div class="box">
                <p class="fat_p">Прайс-лист</p>
                <p class="text">Приведенные ниже цены по изготовлению монолитной бетонной лестницы являются ориентировочными и служат для того, чтобы Вы без труда могли самостоятельно рассчитать стоимость лестницы.</p>
                <p class="text">Цена в рублях 1 метра подъёма бетонной лестницы (без отделки)</p>
                <p class="fat_p">Таблица типов лестниц</p>
                <div class="container">
                    <table id="stairs_type" class="stairs_type">
                        <tr>
                            <td class="table_head"><img src="images/tbl_head_1.png" alt=""></td>
                            <td class="table_cell">27000</td>
                            <td class="table_cell">28000</td>
                            <td class="table_cell">31000</td>
                            <td class="table_cell">29000</td>
                            <td class="table_cell">32000</td>
                            <td class="table_cell">42000</td>
                            <td class="table_cell">44000</td>
                        </tr>
                        <tr>
                            <td class="table_head">Типы лестниц</td>
                            <td class="table_cell"><img src="images/f1.jpg" alt=""></td>
                            <td class="table_cell"><img src="images/f2.jpg" alt=""></td>
                            <td class="table_cell"><img src="images/f3.jpg" alt=""></td>
                            <td class="table_cell"><img src="images/f4.jpg" alt=""></td>
                            <td class="table_cell"><img src="images/f5.jpg" alt=""></td>
                            <td class="table_cell"><img src="images/f6.jpg" alt=""></td>
                            <td class="table_cell"><img src="images/f7.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <td class="table_head"><img src="images/tbl_head_2.png" alt=""></td>
                            <td class="table_cell">37000</td>
                            <td class="table_cell">38000</td>
                            <td class="table_cell">39500</td>
                            <td class="table_cell">41000</td>
                            <td class="table_cell">48000</td>
                            <td class="table_cell">55000</td>
                            <td class="table_cell">58000</td>
                        </tr>
                    </table>
                </div>
                <p class="text">Рассчёт произведён из ширины марша лестницы в 1 метр.</p>
                <p class="fat_p nr">В стоимость лестницы входит:</p>
                <li class="red_li"><span>выезд специалиста,</span></li>
                <li class="red_li"><span>проектно-сметная документация,</span></li>
                <li class="red_li"><span>материалы,</span></li>
                <li class="red_li"><span>опалубка</span></li>
                <li class="red_li"><span>армирование</span></li>
                <li class="red_li"><span>заливка бетоном</span></li>
                <li class="red_li"><span>разборка опалубки</span></li>
                <li class="red_li"><span>транспортные расходы в черте г. Брянска.</span></li>
                <p class="fat_p nr">В стоимость лестницы не входит (рассчитывается отдельно):</p>
                <li class="red_li"><span>работы по усилению мест опирания конструкций</span></li>
                <li class="red_li"><span>устройство дополнительных опор</span></li>
                <li class="red_li"><span>транспортные расходы вне г. Брянска</span></li>
                <p class="text">Цена лестницы шире 1 метра рассчитывается пропорционально увеличению</p>
            </div>
        </div>
    </div>
@endsection

@section('footer')



 @stop