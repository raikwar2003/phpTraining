<?php 
	$hdrcolor="dark-grey";
	$color2="grey";
?>

<section class="well span9 transparentBG">

    <fieldset>
        <legend class="clearfix">User Listing Table Structure View</legend>
        
        <table class="table">
            <thead>
                <tr class="<?php print $hdrcolor; ?>">
                    <th>Username</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ravi.raikwar</td>
                    <td>Ravi</td>
                    <td>Raikwar</td>
                    <td>ravi.raikwar@3pillarglobal.com</td>
                    <td><a href="edit_user.html"><span class="icon-edit" title="Edit" alt="Edit"></span></a> / <a href="javascript:void(0);"><span class="icon-remove" title="Delete" alt="Delete"></span></a></td>
                </tr>
                <tr class="<?php echo $color2; ?>">
                    <td>harsh.lamba</td>
                    <td>Harsh</td>
                    <td>Lamba</td>
                    <td>harsh.lamba@3pillarglobal.com</td>
                    <td><a href="edit_user.html"><span class="icon-edit" title="Edit" alt="Edit"></span></a> / <a href="javascript:void(0);"><span class="icon-remove" title="Delete" alt="Delete"></span></a></td>
                </tr>
                <tr>
                    <td>prashant.agarwal</td>
                    <td>Prashant</td>
                    <td>Agarwal</td>
                    <td>prashant.agarwal@3pillarglobal.com</td>
                    <td><a href="edit_user.html"><span class="icon-edit" title="Edit" alt="Edit"></span></a> / <a href="javascript:void(0);"><span class="icon-remove" title="Delete" alt="Delete"></span></a></td>
                </tr>
            </tbody>
        </table>
    </fieldset>
    
    <fieldset class="push-down data-list">
        <legend class="clearfix">User Listing Div Structure View</legend>
    
        <div class="row-fluid border-botm  <?php echo $hdrcolor; ?>">
            <div class="span3"><strong>Username</strong></div>
            <div class="span2"><strong>First Name</strong></div>
            <div class="span2"><strong>Last Name</strong></div>
            <div class="span4"><strong>Email</strong></div>
            <div class="span2 text-center"><strong>Action</strong></div>
        </div>
        <div class="row-fluid border-botm">
            <div class="span3">ravi.raikwar</div>
            <div class="span2">Ravi</div>
            <div class="span2">Raikwar</div>
            <div class="span4">ravi.raikwar@3pillarglobal.com</div>
            <div class="span2 text-center"><a href="edit_user.html"><span class="icon-edit" title="Edit" alt="Edit"></span></a> / <a href="javascript:void(0);"><span class="icon-remove" title="Delete" alt="Delete"></span></a></div>
        </div>
        <div class="<?php echo "row-fluid border-botm ".$color2 ; ?>">
            <div class="span3">harsh.lamba</div>
            <div class="span2">Harsh</div>
            <div class="span2">Lamba</div>
            <div class="span4">harsh.lamba@3pillarglobal.com</div>
            <div class="span2 text-center"><a href="edit_user.html"><span class="icon-edit" title="Edit" alt="Edit"></span></a> / <a href="javascript:void(0);"><span class="icon-remove" title="Delete" alt="Delete"></span></a></div>
        </div>
        <div class="row-fluid">
            <div class="span3">prashant.agarwal</div>
            <div class="span2">Prashant</div>
            <div class="span2">Agarwal</div>
            <div class="span4">prashant.agarwal@3pillarglobal.com</div>
            <div class="span2 text-center"><a href="edit_user.html"><span class="icon-edit" title="Edit" alt="Edit"></span></a> / <a href="javascript:void(0);"><span class="icon-remove" title="Delete" alt="Delete"></span></a></div>
        </div>
    
    </fieldset>
    
    <fieldset>
        <legend class="clearfix">User Listing Card View</legend>
        <div class="clearfix"></div>
        <div class="row-fluid">
            <div class="well span4 test">
                <div class="span5 pullLeft0"><strong>Username</strong></div>
                <div class="span7 pullLeft0">ravi.raikwar</div>
                
                <div class="span5 pullLeft0"><strong>First Name</strong></div>
                <div class="span7 pullLeft0">Ravi</div>
                
                <div class="span5 pullLeft0"><strong>Last Name</strong></div>
                <div class="span7 pullLeft0">Raikwar</div>
                
                <div class="span5 pullLeft0"><strong>Email</strong></div>
                <div class="span7 pullLeft0 break">ravi.raikwar@3pillarglobal.com</div>
                
                <div class="span5 pullLeft0"><strong>Action</strong></div>
                <div class="span7 pullLeft0"><a href="edit_user.html"><span class="icon-edit" title="Edit" alt="Edit"></span></a> / <a href="javascript:void(0);"><span class="icon-remove" title="Delete" alt="Delete"></span></a></div>
            </div>
            <div class="well span4 test">
                <div class="span5 pullLeft0"><strong>Username</strong></div>
                <div class="span7 pullLeft0">harsh.lamba</div>
                
                <div class="span5 pullLeft0"><strong>First Name</strong></div>
                <div class="span7 pullLeft0">Harsh</div>
                
                <div class="span5 pullLeft0"><strong>Last Name</strong></div>
                <div class="span7 pullLeft0">Lamba</div>
                
                <div class="span5 pullLeft0"><strong>Email</strong></div>
                <div class="span7 pullLeft0 break">harsh.lamba@3pillarglobal.com</div>
                
                <div class="span5 pullLeft0"><strong>Action</strong></div>
                <div class="span7 pullLeft0"><a href="edit_user.html"><span class="icon-edit" title="Edit" alt="Edit"></span></a> / <a href="javascript:void(0);"><span class="icon-remove" title="Delete" alt="Delete"></span></a></div>
            </div>
            <div class="well span4 test">
                <div class="span5 pullLeft0"><strong>Username</strong></div>
                <div class="span7 pullLeft0">prashant.agarwal</div>
                
                <div class="span5 pullLeft0"><strong>First Name</strong></div>
                <div class="span7 pullLeft0">Prashant</div>
                
                <div class="span5 pullLeft0"><strong>Last Name</strong></div>
                <div class="span7 pullLeft0">Agarwal</div>
                
                <div class="span5 pullLeft0"><strong>Email</strong></div>
                <div class="span7 pullLeft0 break">prashant.agarwal@3pillarglobal.com</div>
                
                <div class="span5 pullLeft0"><strong>Action</strong></div>
                <div class="span7 pullLeft0"><a href="edit_user.html"><span class="icon-edit" title="Edit" alt="Edit"></span></a> / <a href="javascript:void(0);"><span class="icon-remove" title="Delete" alt="Delete"></span></a></div>
            </div>
            <div class="well span4 test">
                <div class="span5 pullLeft0"><strong>Username</strong></div>
                <div class="span7 pullLeft0">prashant.agarwal</div>
                
                <div class="span5 pullLeft0"><strong>First Name</strong></div>
                <div class="span7 pullLeft0">Prashant</div>
                
                <div class="span5 pullLeft0"><strong>Last Name</strong></div>
                <div class="span7 pullLeft0">Agarwal</div>
                
                <div class="span5 pullLeft0"><strong>Email</strong></div>
                <div class="span7 pullLeft0 break">prashant.agarwal@3pillarglobal.com</div>
                
                <div class="span5 pullLeft0"><strong>Action</strong></div>
                <div class="span7 pullLeft0"><a href="edit_user.html"><span class="icon-edit" title="Edit" alt="Edit"></span></a> / <a href="javascript:void(0);"><span class="icon-remove" title="Delete" alt="Delete"></span></a></div>
            </div>
            <div class="well span4 test">
                <div class="span5 pullLeft0"><strong>Username</strong></div>
                <div class="span7 pullLeft0">prashant.agarwal</div>
                
                <div class="span5 pullLeft0"><strong>First Name</strong></div>
                <div class="span7 pullLeft0">Prashant</div>
                
                <div class="span5 pullLeft0"><strong>Last Name</strong></div>
                <div class="span7 pullLeft0">Agarwal</div>
                
                <div class="span5 pullLeft0"><strong>Email</strong></div>
                <div class="span7 pullLeft0 break">prashant.agarwal@3pillarglobal.com</div>
                
                <div class="span5 pullLeft0"><strong>Action</strong></div>
                <div class="span7 pullLeft0"><a href="edit_user.html"><span class="icon-edit" title="Edit" alt="Edit"></span></a> / <a href="javascript:void(0);"><span class="icon-remove" title="Delete" alt="Delete"></span></a></div>
            </div>
        </div>
    </fieldset>
</section>