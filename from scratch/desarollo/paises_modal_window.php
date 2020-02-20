   <!-- Modal -->
<div class="modal fade" id="paises_modal" tabindex="-1" role="dialog" aria-labelledby="paises_exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">

        <form  method="post" action='paises.php'>
            <div class="modal-header">
                <h5 class="modal-title" id="paises_exampleModalLabel">Modal title</h5>
                Category : <select name="paises_parent_selection" id="paises_parent_selection">
                    <option value="">-- Please Select --</option>
                    <option value="chocolates">Chocolates</option>
                    <option value="vegetables">Vegetables</option>
                    <option value="icecreams">Ice cream</option>
                </select>
            </div>
            <div class="modal-body"><!--modal content-->         
                <input type="submit" name="paises_Update" id="paises_update" value="Update"> 
            </div>
        </form>
    </div>
</div>
</div>
