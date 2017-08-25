
// when window loads function
// window.addEventListener('load', function(){
//    commentClass();
// }, false)

jQuery(function($){
   function commentClass() {
      $('.post-comments .comment-respond input').addClass('form-control');
      $('.post-comments .comment-respond input[type="submit"]').removeClass('form-control').addClass('btn btn-danger');
      $('.post-comments .comment-respond textArea').addClass('form-control');
   }
   commentClass();
});
// add boostrap class for comments input
