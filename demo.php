<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="editor.css" type="text/css" rel="stylesheet"/>
        <title>LineControl | v1.1.0</title>
        <?php
        $textarea = 'Although this is the original repository, we need the project to be tiny and
focused on the needs of the MindMup tool, which means that we do not want to
complicate it with all the various bits and pieces needed for other usages and
older browsers.

Meanwhile, Steve was kind enough to create a fork, backport it to older
browsers, extend and integrate all kinds of changes. Steve\'s fork does not need
to stay small, slim and focused, so please use his repo for all your needs if
this plugin does provide out of the box';
        ?>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <h2 class="demo-text">LineControl Demo</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 nopadding">
                            <form method="post">
                                <textarea name="description" id="txtEditor"><?php echo $textarea; ?></textarea> 
                                <button type="submit" class="btn">Update</button>
                            </form>


                        </div>
                    </div>
                    <?php
                    if (!empty($_POST['description'])) {
                        echo '<div class="row">' . $_POST['description'] . '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="container-fluid footer">
            <p class="pull-right">&copy; Suyati Technologies <?php echo date('Y'); ?>. All rights reserved.</p>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="editor.js"></script>
        <script>
            function LineControlerActive($id) {
                if (document.getElementById($id) != null) {
                    var $text = $('#' + $id).html();
                    $('#' + $id).Editor();
                    $('#' + $id).Editor('setText', $text);
                    $('form').submit(function () {
                        var $text = $('#' + $id).Editor('getText');
                        $('#' + $id).html($text);
                    });
                }
            }
            LineControlerActive('txtEditor');
        </script>
    </body>
</html>
