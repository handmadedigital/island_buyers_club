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