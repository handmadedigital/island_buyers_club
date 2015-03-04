$(function(){
   displayAddVariationForm();
    addAnotherVariation();
});

function addAnotherVariation()
{
    $('#addAnotherVariationButton').click(function (e) {
        e.preventDefault();

        var id = 1;

        $('#AddVariationOptionInputs').append('<div class="row"><div class="input-field  col s6"><input type="text" id="productOption'+id+'" class="validate" name="options[]"><label for="productOption'+id+'">Variation Name</label></div><div class="input-field  col s6"><input type="text" id="productOptionValues'+id+'" class="validate" name="option_values[]"><label for="productOptionValues'+id+'">Variation Option Values(pipe separated)</label> </div></div>');

        id++;
    });
}

function displayAddVariationForm()
{
    $('#addVariationButton').click(function (e) {
        e.preventDefault();

        hideAddProductButtons();
        changeFormAction();
    });
}

function changeFormAction()
{
    $('#addProductForm form').attr("action", "/admin/product/add-variable-product");
}

function hideAddProductButtons()
{
    $('#addProductButtons').fadeOut(function(){
        $('#addVariationOptionsWrapper').fadeIn();
    });
}