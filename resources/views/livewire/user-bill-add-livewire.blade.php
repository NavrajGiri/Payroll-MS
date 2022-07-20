<div>
        <center>
                Bill_No: <input type="number" wire:model="bill_no"><br><br>
                User_Id: <input type="number" wire:model="user_id"><br><br>
                Product_Name: <input type="text" wire:model="product_name"><br><br>
                Product_Details: <input type="text" wire:model="product_details"><br><br>
                Quantity: <input type="text" wire:model="quantity"><br><br>
                Amount: <input type="number" wire:model="amount"><br><br>
                issued_salary_id: <input type="number" wire:model="issued_salary_id"><br><br>
                Total_Amount: <input type="number" wire:model="total_amount"><br><br>
                <input type="button" value="update" wire:click='save()' name="done"><br><br>
        </center>
</div>
