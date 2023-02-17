<?php
if (!function_exists('e')) {
    function e($value) {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}
if (!function_exists('data_list')) {
    function data_list($DB) {
        foreach ($DB as $row) {
            $content_m = html_entity_decode($row["body"]);
            echo '<form action="contact.php" method="post">'."\n";
            echo csrf_field();
            echo    '<tr>'."\n".
                        "<td>{$row["id"]}</td>"."\n".
                        "<td>{$row["name"]}</td>"."\n".
                        "<td>{$row["kana"]}</td>"."\n".
                        "<td>{$row["tel"]}</td>"."\n".
                        "<td>{$row["email"]}</td>"."\n".
                        "<td><pre>\n{$content_m}\n</pre></td>"."\n".
                        '<input type="hidden" name="id" value="'.$row["id"].'">'."\n".
                        '<td><input type="submit" name="submit" value="編集"></td>'."\n".
                        '<td><input type="submit" name="submit" class="delete" value="削除"></td>'."\n".
                    '</tr>'."\n".
                '</form>'."\n";
        }
    }
}
?>