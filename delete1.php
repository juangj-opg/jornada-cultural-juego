<select name="clase"> 
    <?php foreach($clases as $clase):?>
    <option value="<?php echo $clase['id']; ?>"><?php echo $clase['clase']; ?></option>
    <?php endforeach; ?>
</select>