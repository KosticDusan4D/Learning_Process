<div class="row no-gutters">
    <footer class="col-sm-12 fixed-bottom text-center bg-dark">

    <!-- Basic footer just showing current date and time -->
        <?php
          $datum = date("d.m.Y");
          $sati = date("H");
          $minuti = date("i");
          echo "$datum, $sati:$minuti"
          ?>
    </footer>
  </div>
</body>
</html>