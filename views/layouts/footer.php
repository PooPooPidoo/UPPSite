    <div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Реутов, Ярослав, Белов</p>
                <p class="pull-right">Сайт для задания по предмету Уголовно-Правовые проблемы ПО</p>
            </div>
        </div>
    </div>
    <script type="text/javascript" id="cookieinfo"
    src="//cookieinfoscript.com/js/cookieinfo.min.js"
    data-bg="#645862"
    data-fg="#FFFFFF"
    data-link="#F1D600"
    data-message="Этот сайт использует куки-файлы и другие технологии, чтобы помочь вам в навигации, а также предоставить лучший пользовательский опыт, анализировать использование наших продуктов и услуг, повысить качество рекламных и маркетинговых активностей. Нажимая на кнопку Принять вы принимаете данное "
    data-moreinfo="https://www.keope.com/storage/sito1/ru/cookie-policy-keope-russo.pdf"
    data-linkmsg="Соглашение"
    data-close-text="Принять">
</script>
</footer><!--/Footer-->



<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>