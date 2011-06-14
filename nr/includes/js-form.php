<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.timepicker.js"></script>
<script>
jQuery.validator.setDefaults({debug:true});

$(document).ready(function() {
$("label.error").hide();
$(".pref").validate({
    wrapper: "li",
    rules: {
        street1: {
        required: true,
        minlength: 3 },
        city: {required: "#street:filled"},
        state: {required: "#street:filled"}, 
        zip: {required:"#street:filled"}
    },
    messages: {
        street1: {required:"This is required",
            minlength:"Please put full address"},
        city: "this is required",
        state: "this is required",
        zip: "this is required"}
});
$(".create").validate({
    wrapper: "li",
    rules: {
        street1: {
        required: true,
        minlength: 3 },
        city: {required: "#street:filled"},
        state: {required: "#street:filled"}, 
        zip: {required:"#street:filled"}
    },
    messages: {
        street1: {required:"This is required",
            minlength:"Please put full address"},
        city: "this is required",
        state: "this is required",
        zip: "this is required"}
});
});
</script>