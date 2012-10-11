<?php header("Content-Type: text/xml;"); ?>
<?php printf('<?xml version="1.0" ?>'); ?>
<page>
    <container>
        <column>
            <?php
            if (strlen($_POST["dropdown"]) > 0) {
                echo('<FORWARD url="' . $_POST["dropdown"] . '"/>');
            } else {
                echo('<TEXT><richtext>You did not select anything!</richtext></TEXT>');
            }
            ?>
        </column>
    </container>
</page>
