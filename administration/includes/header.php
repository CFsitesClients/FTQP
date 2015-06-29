<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../css/admin_style.css" />
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
        <link href="editor/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="editor/css/froala_editor.min.css" rel="stylesheet" type="text/css" />
        <link href="editor/css/froala_style.min.css" rel="stylesheet" type="text/css" />
        <link href="editor/css/froala_content.min.css" rel="stylesheet" type="text/css" />
        <link href="editor/css/froala_style.min.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
    
     <script src="http://code.jquery.com/jquery-1.11.0.js"></script>
    <script src="editor/js/froala_editor.min.js"></script>
    <script>
      $(function() {
          $('#edit').editable({inlineMode: false})
      });
    </script>   
     <div id="conteneur" >
         <div id="gauche">
            <div id="logo_admin"></div>
          <?php require_once 'includes/menu.php'; ?>
        </div>
   
        <div id="droite">

             <div id="contenu_admin">
                 