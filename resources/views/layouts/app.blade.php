<html>
<head>
    <title>Island Buyers Club</title>

    <link rel="stylesheet" type="text/css" href="/static/vendor/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
    @yield('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="/static/vendor/js/materialize.js"></script>
<script src="/static/js/option-selector.js"></script>
<script src="/static/js/add-product.js"></script>
<script src="/static/js/sidebar.js"></script>
<script>
$(function()
{
    disableExtraOptions();
    getOptionValues();
});

function getOptionValues()
{
    $('.select-option-values').change(function () {

        var selected_options = getSelectedOptions();

        $.get(
            "/product/get-options",
            {'selected_options[]': selected_options},
            function(data){
                $('#variantIdValue').val(data);
            }
        );
    });
}

var disableExtraOptions = function () {

    var select_box = $('.select-option-values');

    select_box.attr("disabled", true);

    select_box.first().attr("disabled", false);
};

function getSelectedOptions() {
    var selected_options = [];
    $('.select-option-values').each(function () {
        if ($(this).is(":enabled")) {
            selected_options.push($(this).val());
        }
    });
    return selected_options;
}
</script>
</body>
</html>