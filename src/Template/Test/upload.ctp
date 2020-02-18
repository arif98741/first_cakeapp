<h1>File Upload</h1>
<hr>
<?= $this->Flash->render() ?>
<!--<form action="" method="post">-->
<?= $this->Form->create($post,['type' => 'file']) ?>
    <label>Select New File</label>
    <br>
    <input type="file" name="file">
    <br>
    <button type="submit">Upload Now</button>
<?= $this->Form->end() ?>
