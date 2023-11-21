<html>
    <body>
        <?php
        $pays=$_POST["pays"];
        switch ($pays) {
            case "paris":
              echo "this capital is france!";
              break;
            case "berlin":
              echo "this capital is  allmangne!";
              break;
            case "rome":
              echo "this capital is italie!";
              break;
            default:
              echo "this capital isn't france,allmangne,italie!";
          }
        ?>
    </body>
</html>