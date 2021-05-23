<script type="text/javascript" src="//code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/38b1f6738f.js" crossorigin="anonymous"></script>
<script>
document.getElementById("input").addEventListener("keypress", function(evt){
var words = this.value.split(/\s+/);
var numWords = words.length;
var maxWords = 13;
if(numWords > maxWords){
  evt.preventDefault();
}
});
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js"></script>
<script>
 new FroalaEditor('textarea#editor');
 new FroalaEditor('.selector', {
  attribution: false
});
 </script>