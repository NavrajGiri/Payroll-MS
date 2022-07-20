<div>
     <center>
        User_Id: <input type="number" wire:model="user_id"><br><br>
        Allowance_Name: <input type="text" wire:model="allowance_name"><br><br>
        Allowance_Details: <input type="text" wire:model="allowance_details"><br><br>
        Allowance_Type: <select class="form-control" name="allowance_type">
            <option value="">credit</option>
            <option value="">debit</option></select><br><br>
        Amount: <input type="number" wire:model="amount"><br><br>
        Total: <input type="number" wire:model="total"><br><br>
        Issued_Salary_id: <input type="number" wire:model="issued_salary_id"><br><br>
        Issue_Date: <input type="date" wire:model="issue_date"><br><br>
        <input type="button"  wire:click ='save()' value="save!" name="done"><br><br>
       </center>


</div>
