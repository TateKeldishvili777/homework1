<!DOCTYPE html>
<br><br><br>
        <form action="calculation" method="POST">
        @csrf
             <input type="number" name="firstnumber" placeholder="Enter I number" >
             <input type="number" name="secondnumber" placeholder="Enter II number" >
             <select name="operator">
             <option>Select Operator</option>
                 <option value="+">+</option>
                 <option value="-">-</option>
                 <option value="*">*</option>
                 <option value="/">/</option>
             </select>
             <input type="submit" name="Calculate"  value="Calculate">
        </form>
<br><br><br>
