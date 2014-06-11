
<?php $this->Html->scriptStart(array('inline'=>false)); ?>

	$(function(){

		$("#category_id").change(function(){
			//alert( $(this).val() );
			alert($("#category_id").val());

			var data = {request: $("#category_id").val()};

			  /**
             * Ajax通信メソッド
             * @param type  : HTTP通信の種類
             * @param url   : リクエスト送信先のURL
             * @param data  : サーバに送信する値
             */
            $.ajax({
                type: "POST",
                url: "/pocketLesson/classifications/ajax_classifications",
                data: data,
                /**
                 * Ajax通信が成功した場合に呼び出されるメソッド
                 */
                success: function(data, dataType)
                {
                    //successのブロック内は、Ajax通信が成功した場合に呼び出される

                    //PHPから返ってきたデータの表示
                    alert(data);
                },
                /**
                 * Ajax通信が失敗した場合に呼び出されるメソッド
                 */
                error: function(XMLHttpRequest, textStatus, errorThrown)
                {
                    //通常はここでtextStatusやerrorThrownの値を見て処理を切り分けるか、単純に通信に失敗した際の処理を記述します。

                    //this;
                    //thisは他のコールバック関数同様にAJAX通信時のオプションを示します。

                    //エラーメッセージの表示
                    alert('Error : ' + errorThrown);
                }
            });

            //サブミット後、ページをリロードしないようにする
            return false;



		});

	});

<?php $this->Html->scriptEnd(); ?>


<div class="container">

<div class="row">

</div>

<?php
echo $this->Form->input('category_id',array('type'=>'select','options'=>$categories,'empty'=>'選択してください'));
echo $this->Form->input('classification_id',array('type'=>'select','options'=>$classifications, 'empty'=>'選択してください'));

?>

<!-- <form action="/pocketLesson/chapters/add" method="post"> -->

<!--
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
  <div class="panel-body">
    <p>...</p>
  </div>


  <ul id ="paneltest" class="list-group">
    <li class="list-group-item"><?php echo $this->Html->link(__('chapter新規作成'),array('action'=>'add',$lessonId),array('class'=>'btn btn-primary btn-small')); ?>Cras justo odio</li>
    <li class="list-group-item"><?php echo $this->Html->link(__('section新規作成'),array('action'=>'../sections/add',1),array('class'=>'btn btn-primary btn-small')); ?>Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>

<button id="hide_button">隠す</button>
<p>aaaaaaa</p>

<button id="show_button">表示する</button>
-->
</div>

<!-- </form> -->