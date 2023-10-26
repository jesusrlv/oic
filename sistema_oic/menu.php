<?php

if($_SESSION['perfil']==1){

echo '

<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link active" href="dashboard.php">
       <!-- <span data-feather="home"></span> -->
       <i class="fas fa-laptop-house"></i> 
       Dashboard <span class="sr-only">(current)</span>
     </a>
   </li>
   <hr style="color: dimgrey;">
   
   <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
     <span>AÑO 2020</span>
     <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
       <span data-feather="plus-circle"></span>
     </a>
   </h6>

   <li class="nav-item">
     <a class="nav-link" href="trimestre1.php">
       <span data-feather="layers"></span>
        
       Primer trimestre
     </a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="trimestre2.php">
       <span data-feather="layers"></span>
       Segundo trimestre
     </a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="trimestre3.php">
       <span data-feather="layers"></span>
       Tercer trimestre
     </a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="trimestre4.php">
       <span data-feather="layers"></span>
       Cuarto trimestre
     </a>
   </li> -->
 </ul>

 ';

}
if($_SESSION['perfil']==2){

echo '

<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link active" href="dashboard.php">
       <!-- <span data-feather="home"></span> -->
       <i class="fas fa-laptop-house"></i> 
       Dashboard <span class="sr-only">(current)</span>
     </a>
   </li>
   <hr style="color: dimgrey;">
   
   <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
     <span>AÑO 2020</span>
     <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
       <span data-feather="plus-circle"></span>
     </a>
   </h6>

   <li class="nav-item">
     <a class="nav-link" href="trimestre1.php">
       <span data-feather="layers"></span>
        
       Primer trimestre
     </a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="trimestre2.php">
       <span data-feather="layers"></span>
       Segundo trimestre
     </a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="trimestre3.php">
       <span data-feather="layers"></span>
       Tercer trimestre
     </a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="trimestre4.php">
       <span data-feather="layers"></span>
       Cuarto trimestre
     </a>
   </li> -->
 </ul>

 ';

 echo '
 
 <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Departamentos responsables</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          ';
          $tabla="SELECT * FROM area";
                      $resultadotabla = $conn->query($tabla);
                      while($row = $resultadotabla->fetch_assoc()){
                          
                        echo '<li class="nav-item">';
                        echo ('<a class="nav-link" href="area.php?area='.$row['resp'].'">
                          <span data-feather="file-text"></span>
                            '.$row['area'].'
                            
                            </a>');
                        echo '</li>';                      
                      }
 
 ';

}

 ?>