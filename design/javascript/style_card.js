$(document).ready(function()
{

  $("#more").click(function()
    {
        $(".container .card").addClass('flipped');
        $(".font").css("z-index",0);
        $(".back").css("z-index",1);
        $(".back").css('display', 'block');
        $(".card").addClass('noanimation');
      });

  $("#close").click(function()
  {
    $(".container .card").removeClass('flipped');
    $(".font").css('display', 'block');
    setTimeout(function()
    {
      $(".back").css('display', 'none');
    }, 300);
  });

$("#edit").click(function()
{
  $(".card").addClass('card_zoomin');
  $(".font").css('display', 'none');
  setTimeout(function()
{
  $(".card_zoomin_content").css('display', 'block');
}, 500);
});

$("#delete").click(function()
{
  $(".card").addClass('card_delete');
});

$("#close_zoomin").click(function()
{
  $(".card").removeClass('card_zoomin');
  $(".card_zoomin_content").css('display', 'none');
  setTimeout(function()
  {
    $(".font").css('display', 'block');
    $(".card").removeClass('noanimation');
  },500);
});

$(".text_edit").click(function()
{
  $(this).css('padding-left', '20px !important;');
  $(this).parent().siblings().removeClass('text_edit_unclick');
  $(this).parent().siblings().addClass('text_edit_click');
});
$(".text_edit").blur(function()
{
  $(this).parent().siblings().addClass('text_edit_unclick');
  $(this).parent().siblings().removeClass('text_edit_click');
});
});
