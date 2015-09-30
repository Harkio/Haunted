
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Haunted.ie New Article</title>

</head>
<body>
<h1>Add Article Form</h1>
<form name="add_article_form" action="new_article_action.php" method="POST">
  <table width="450px">
      </tr>
    
    <tr>
      <td valign="top"><label for="title">Title</label></td>
      <td valign="top"><input  type="text" name="title" maxlength="50" size="30"></td>
    </tr>
    <tr>
      <td valign="top"><label for="author">Author </label></td>
      <td valign="top"><input  type="text" name="author" maxlength="50" size="30"></td>
    </tr>
    <tr>
      <td valign="top"><label for="image">Image Name (include extension)</label></td>
      <td valign="top"><input  type="text" name="image" maxlength="50" size="30"></td>
    </tr>
    <tr>
      <td valign="top"><label for="genre">Genre</label></td>
      <td valign="top"><input  type="text" name="genre" maxlength="30" size="30"></td>
    </tr>
    <tr>
      <td valign="top"><label for="summary">Summary (200 Characters) </label></td>
      <td valign="top"><textarea  name="summary" maxlength="200" cols="100" rows="6"></textarea></td>
    </tr>
    <tr>
      <td valign="top"><label for="content">content (2000 Characters) </label></td>
      <td valign="top"><textarea  name="content" maxlength="50000" cols="100" rows="10"></textarea></td>
    </tr>
    <tr>
      <td valign="top"><label for="url">Url</label></td>
      <td valign="top"><textarea  name="url" maxlength="100" cols="100" rows="1"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:center"><input type="submit" value="Submit"></td>
    </tr>
  </table>
</form>
</body>
</html>