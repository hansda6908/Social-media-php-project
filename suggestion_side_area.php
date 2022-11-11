<p class="suggestion-text">Suggestion for you</p>

<?php include("get_suggestions.php"); ?>

<?php foreach($suggestions as $suggestion){ ?>

    <?php if($suggestion['id'] != $_SESSION['id']){ ?>

<!--profile Suggestion-->
<div class="suggestion-card">

    <div class="suggestion-pic">

    <form action="other_user_profile.php" method="POST" id="suggestion_form<?php echo $suggestion['id'];?>">
        <input type="hidden" value="<?php echo $suggestion['id']; ?>" name="other_user_id">
        <img onclick="document.getElementById('suggestion_form'+<?php echo $suggestion['id']; ?>).submit();" src="<?php echo "Assets/imgs/".$suggestion['image']; ?>" />
        </form>
    </div>
    <div>
        <p class="username"><strong><?php echo $suggestion['username']; ?></strong></p>
        <p class="sub-text"><?php echo substr($suggestion['bio'],0,15); ?></p>
    </div>
        <form action="follow_this_person.php" method="POST">
            <input type="hidden" name="other_user_id" value="<?php echo $suggestion['id']; ?>">
       

    <button class="follow-btn" name="follow_btn" type="submit">
        <strong>follow</strong>
    </button>
    </form>

</div>

    <?php } ?>
    <?php } ?>