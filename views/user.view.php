<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/navbar.php'; ?>

<div class="container-fluid">
 <div class="row">
     <div class="col-4">
         <h3>Users</h3>
         <table class="table">
             <thead>
                 <tr>
                     <th>Num</th>
                     <th>Email</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody>
                 <?php if(isAdmin()): ?>
                   <tr>
                       <td>0</td>
                       <td>New student</td>
                       <td><button class= "btn btn-primary btn-sm">Add user</button></td>
                   </tr>
                 <?php endif; ?>
                <?php foreach($tablestudent as $key => $everyuser): ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $everyuser['email']; ?></td>
                        <td><button data-email ="<?php echo $everyuser['email']; ?>" class="btn alert-info btn-sm">Look more</button></td>
                </tr>
                 <?php endforeach; ?> 
                 </tbody>
         </table>
     </div>

     <div class="col-6 offset-2">
         <h3>Plakanja</h3>
         <table class="table">
            <thead>
                 <tr>
                     <th>Index</th>
                     <th>Email</th>
                     <th>Bill</th>
                     <th>Time</th>
                 </tr>
                <thead>
                    <tbody id="mainbody">
                        <?php foreach($plakanja as $key => $plakanje):  ?>
                           <tr>
                               <td><?php echo $key+1; ?></td>
                               <td><?php echo $plakanje['email']; ?></td>
                               <td><?php echo $plakanje['suma']; ?></td>
                               <td><?php echo $plakanje['created_at']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                   <tfoot>
                       <tr>
                           <td>***</td>
                           <td>Total</td>
                           <td id="mainfoot"><?php echo $total['zbir']; ?></td>
                       </tr>
                   </tfoot>
         </table>
     </div>
 </div>
</div>

<?php require 'views/partials/user.script.php'; ?>
<?php require 'views/partials/bottom.php'; ?>