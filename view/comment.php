<?php  
    session_start();
    ob_start();
    require_once "../model/db.php";
    require_once "../model/product.php";
    $idpro = $_REQUEST['idpro'];
    // $id_user= $_SESSION['user_info']['id_user'];
    $loadComment=getUserComment($idpro);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <label for="content__comment" >Nhập nội dung</label>
        <!-- nội dung -->
        <input type="hidden" name="idpro" value="<?=$idpro?>">
        <textarea name="content__comment" id="content__comment" class="content__comment" cols="100%" rows="5" placeholder="Nội dung..."></textarea>
        <input type="submit" value="Gửi" class="comment__send" name="sendComment"  id="comment__send">
        <label for="comment__send" class="comment__send--icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                <path d="M27.1875 2.8125L2.8125 14.0625L14.0625 16.4062M27.1875 2.8125L17.8125 27.1875L14.0625 16.4062M27.1875 2.8125L14.0625 16.4062" stroke="black" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </label>
    </form>
        




        
        <div class="history__comment--box row">
        <?php foreach ($loadComment as $ItemC) : ?>

            <?php if($ItemC['replay_comment']==0){ ?>
                <div class="comment--box__nameUser">
                    Người dùng: <?= $ItemC['username'] ?>
                </div>
                <div class="comment--box__content">
                     <?= $ItemC['text'] ?>
                </div>
                <div class="comment__operation row">
                    <div class="comment--box__reply" id="reply" onclick="toggleReply(this)">
                    
                        Trả lời
                    </div>
                    <div class="comment--box__like">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12" fill="none">
                            <path d="M11.533 8.24417L11.9842 5.88627C12.0107 5.74807 12.0034 5.60631 11.9629 5.47092C11.9224 5.33553 11.8496 5.20976 11.7496 5.10242C11.6496 4.99509 11.5249 4.90877 11.3841 4.8495C11.2433 4.79024 11.0899 4.75946 10.9346 4.75933H7.61804C7.5407 4.75926 7.46431 4.744 7.39416 4.71461C7.32402 4.68522 7.26179 4.6424 7.2118 4.58912C7.16181 4.53584 7.12525 4.47338 7.10466 4.40608C7.08408 4.33877 7.07996 4.26822 7.09258 4.19933L7.51691 1.86165C7.58581 1.48209 7.56619 1.09373 7.45931 0.721417C7.41353 0.56751 7.32539 0.426558 7.20309 0.311672C7.08078 0.196786 6.92828 0.111698 6.75977 0.0643247L6.66697 0.0371624C6.45734 -0.0235441 6.22993 -0.0094822 6.03143 0.0764609C5.81382 0.171239 5.6551 0.344037 5.59622 0.549198L5.29157 1.6091C5.19458 1.94639 5.05364 2.2721 4.87172 2.57942C4.60547 3.02846 4.19458 3.38851 3.76769 3.72081L2.84606 4.43743C2.71829 4.53713 2.6185 4.66274 2.55487 4.80398C2.49123 4.94522 2.46557 5.09806 2.47997 5.24998L3.0003 10.6784C3.0232 10.9183 3.14487 11.1418 3.34132 11.3048C3.53776 11.4677 3.79471 11.5583 4.06145 11.5585H7.0369C9.2648 11.5585 11.1663 10.1565 11.5324 8.24417H11.533Z" fill="#CCCCCC"/>
                            <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M0.459583 4.3261C0.583273 4.32121 0.704269 4.35967 0.797296 4.43344C0.890323 4.50721 0.948186 4.61059 0.958797 4.72197L1.57962 11.2155C1.59013 11.3122 1.57871 11.4098 1.54604 11.5023C1.51337 11.5949 1.46015 11.6805 1.38962 11.7539C1.31909 11.8273 1.23274 11.8869 1.13583 11.9291C1.03892 11.9714 0.933497 11.9953 0.825995 11.9995C0.718492 12.0037 0.611167 11.9881 0.510576 11.9536C0.409985 11.9191 0.318238 11.8665 0.240939 11.7989C0.163641 11.7313 0.102413 11.6502 0.0609961 11.5605C0.0195788 11.4708 -0.00115882 11.3744 4.99597e-05 11.2773V4.75896C0.000102259 4.64724 0.0479275 4.53985 0.133548 4.4592C0.219168 4.37855 0.335969 4.33086 0.459583 4.3261Z" fill="#CCCCCC"/>
                        </svg>
                    </div>
                    <div class="comment--box__datetime">
                        Ngày <?= $ItemC['time'] ?>
                    </div>
                </div>
                <?php }?>
                <div class="box__reply row"  id="reply__admin" style="display: none;">
                    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                        <input type="hidden" name="idpro" value="<?=$ItemC['id_prd']?>">
                        <input type="hidden" name="parent_comment_id" value="<?=$ItemC['id_cmt']?>">
                        <textarea name="reply__content" class="content__comment" cols="100%" rows="3" placeholder="Nội dung..."></textarea>
                        <input type="submit" value="Gửi" class="comment__send" name="sendReply"  id="comment__send">

                        <label for="comment__send" class="comment__send--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <path d="M27.1875 2.8125L2.8125 14.0625L14.0625 16.4062M27.1875 2.8125L17.8125 27.1875L14.0625 16.4062M27.1875 2.8125L14.0625 16.4062" stroke="black" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </label>
                    </form> 

                <?php $replies = getReplies($ItemC['id_cmt']); ?>
                <?php foreach ($replies as $reply) : ?>
                    <div class="box__reply--new row">
                        <div class="comment--box__nameUser">
                            Quản trị viên: <?=$reply['username']?>
                        </div>
                        <div class="comment--box__content">
                            <?=$reply['text']?>
                        </div>
                        <div class="comment__operation row">
                            <div class="comment--box__like">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12" fill="none">
                                    <path d="M11.533 8.24417L11.9842 5.88627C12.0107 5.74807 12.0034 5.60631 11.9629 5.47092C11.9224 5.33553 11.8496 5.20976 11.7496 5.10242C11.6496 4.99509 11.5249 4.90877 11.3841 4.8495C11.2433 4.79024 11.0899 4.75946 10.9346 4.75933H7.61804C7.5407 4.75926 7.46431 4.744 7.39416 4.71461C7.32402 4.68522 7.26179 4.6424 7.2118 4.58912C7.16181 4.53584 7.12525 4.47338 7.10466 4.40608C7.08408 4.33877 7.07996 4.26822 7.09258 4.19933L7.51691 1.86165C7.58581 1.48209 7.56619 1.09373 7.45931 0.721417C7.41353 0.56751 7.32539 0.426558 7.20309 0.311672C7.08078 0.196786 6.92828 0.111698 6.75977 0.0643247L6.66697 0.0371624C6.45734 -0.0235441 6.22993 -0.0094822 6.03143 0.0764609C5.81382 0.171239 5.6551 0.344037 5.59622 0.549198L5.29157 1.6091C5.19458 1.94639 5.05364 2.2721 4.87172 2.57942C4.60547 3.02846 4.19458 3.38851 3.76769 3.72081L2.84606 4.43743C2.71829 4.53713 2.6185 4.66274 2.55487 4.80398C2.49123 4.94522 2.46557 5.09806 2.47997 5.24998L3.0003 10.6784C3.0232 10.9183 3.14487 11.1418 3.34132 11.3048C3.53776 11.4677 3.79471 11.5583 4.06145 11.5585H7.0369C9.2648 11.5585 11.1663 10.1565 11.5324 8.24417H11.533Z" fill="#CCCCCC"/>
                                    <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M0.459583 4.3261C0.583273 4.32121 0.704269 4.35967 0.797296 4.43344C0.890323 4.50721 0.948186 4.61059 0.958797 4.72197L1.57962 11.2155C1.59013 11.3122 1.57871 11.4098 1.54604 11.5023C1.51337 11.5949 1.46015 11.6805 1.38962 11.7539C1.31909 11.8273 1.23274 11.8869 1.13583 11.9291C1.03892 11.9714 0.933497 11.9953 0.825995 11.9995C0.718492 12.0037 0.611167 11.9881 0.510576 11.9536C0.409985 11.9191 0.318238 11.8665 0.240939 11.7989C0.163641 11.7313 0.102413 11.6502 0.0609961 11.5605C0.0195788 11.4708 -0.00115882 11.3744 4.99597e-05 11.2773V4.75896C0.000102259 4.64724 0.0479275 4.53985 0.133548 4.4592C0.219168 4.37855 0.335969 4.33086 0.459583 4.3261Z" fill="#CCCCCC"/>
                                </svg>
                            </div>
                            <div class="comment--box__datetime">
                                ngày <?=$reply['time']?>
                            </div>          
                        </div>
                        
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
            </div>

    <?php
          if(isset($_POST['sendComment'])&&($_POST['sendComment'])){
            $content = $_POST['content__comment'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user_info']['id_user'];
            $dateComment = date('Y-m-d H:i:s');
            insert_binhluan($content, $iduser, $idpro, $dateComment);
            header("location: ".$_SERVER['HTTP_REFERER']);
            exit();
        }
    ?>
    <?php
        if (isset($_POST['sendReply']) && ($_POST['sendReply'])) {
            $content = $_POST['reply__content'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user_info']['id_user'];
            $id_replay=$_POST['parent_comment_id'];
            $dateComment = date('Y-m-d H:i:s');
            insert_replay($content, $iduser, $idpro, $dateComment, $id_replay);
            header("location: ".$_SERVER['HTTP_REFERER']);
            exit();
        }
    
    ?>
</body>
</html>