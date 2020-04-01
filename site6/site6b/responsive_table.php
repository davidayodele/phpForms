<!DOCTYPE html>
<html lang="en">
<script src="js/jquery.min.js"></script><!-- jQuery load -->

<div class="divTable" id="results">
  <div class='divTableHeading'>
    <div class='divTableHead'>Header One</div>
    <div class='divTableHead'>Header Two</div>
    <div class='divTableHead'>Header Three</div>
    <div class='divTableHead'>Header Four</div>
  </div>
  <div class='divTableRow'>
    <div class='table_small'>
      <div class='divTableCell'>Header One</div>
      <div class='divTableCell'>-1.2726</div>
    </div>
    <div class='table_small'>
      <div class='divTableCell'>Header Two</div>
      <div class='divTableCell'>0.1311</div>
    </div>
    <div class='table_small'>
      <div class='divTableCell'>Header Three</div>
      <div class='divTableCell'>-0.4782</div>
    </div>
    <div class='table_small'>
      <div class='divTableCell'>Header Four</div>
      <div class='divTableCell'>-0.9919</div>
    </div>
  </div>
  <div class='divTableRow'>
    <div class='table_small'>
      <div class='divTableCell'>Header One</div>
      <div class='divTableCell'>-0.89</div>
    </div>
    <div class='table_small'>
      <div class='divTableCell'>Header Two</div>
      <div class='divTableCell'>0.7986</div>
    </div>
    <div class='table_small'>
      <div class='divTableCell'>Header Three</div>
      <div class='divTableCell'>0.876</div>
    </div>
    <div class='table_small'>
      <div class='divTableCell'>Header Four</div>
      <div class='divTableCell'>0.498</div>
    </div>
  </div>
  <div class='divTableRow'>
    <div class='table_small'>
      <div class='divTableCell'>Header One</div>
      <div class='divTableCell'>-1.1669</div>
    </div>
    <div class='table_small'>
      <div class='divTableCell'>Header Two</div>
      <div class='divTableCell'>0.4949</div>
    </div>
    <div class='table_small'>
      <div class='divTableCell'>Header Three</div>
      <div class='divTableCell'>-0.7113</div>
    </div>
    <div class='table_small'>
      <div class='divTableCell'>Header Four</div>
      <div class='divTableCell'>0.434</div>
    </div>
  </div>
  <div class='divTableRow'>
    <div class='table_small'>
      <div class='divTableCell'>Header One</div>
      <div class='divTableCell'>0.1996</div>
    </div>
    <div class='table_small'>
      <div class='divTableCell'>Header Two</div>
      <div class='divTableCell'>-0.7693</div>
    </div>
    <div class='table_small'>
      <div class='divTableCell'>Header Three</div>
      <div class='divTableCell'>1.974</div>
    </div>
    <div class='table_small'>
      <div class='divTableCell'>Header Four</div>
      <div class='divTableCell'>-0.959</div>
    </div>
  </div>
  <div class='divTableRow'>
    <div class='table_small'>
      <div class='divTableCell'>Header One</div>
      <div class='divTableCell'>-1.5998</div>
    </div>
    <div class='table_small'>
      <div class='divTableCell'>Header Two</div>
      <div class='divTableCell'>-0.1149</div>
    </div>
    <div class='table_small'>
      <div class='divTableCell'>Header Three</div>
      <div class='divTableCell'>1.3888</div>
    </div>
    <div class='table_small'>
      <div class='divTableCell'>Header Four</div>
      <div class='divTableCell'>-0.0689</div>
    </div>
  </div>
</div>
</html>

<style>

.divTable {
    display: table;
    text-align: center;
    width: 60%;
    margin: 10% auto 0;
    border-collapse: separate;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
  }
  
  .divTableRow {
    display: table-row;
  }
  
  .divTableHeading {
    display: table-row;
  }
  
  .divTableHead {
    display: table-cell;
    border-bottom: #ccc 1px solid;
    border-top: #ccc 1px solid;
    background: #bdbdbd;
    color: #e5e5e5;
    padding-top: 10px;
    padding-bottom: 10px;
    font-weight: 700;
  }
  
  .divTableHead:first-child {
    border-left: #ccc 1px solid;
    border-top-left-radius: 5px;
  }
  
  .divTableHead:last-child {
    border-right: #ccc 1px solid;
    border-top-right-radius: 5px;
  }
  
  .table_small {
    display: table-cell;
  }
  
  .divTableRow > .table_small > .divTableCell:nth-child(odd) {
    display: none;
    background: #bdbdbd;
    color: #e5e5e5;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  
  .divTableRow > .table_small > .divTableCell {
    padding-top: 3px;
    padding-bottom: 3px;
    color: #5b5b5b;
    border-bottom: #ccc 1px solid;
  }
  
  .divTableRow > .table_small:first-child > .divTableCell {
    border-left: #ccc 1px solid;
  }
  
  .divTableRow > .table_small:last-child > .divTableCell {
    border-right: #ccc 1px solid;
  }
  
  .divTableRow:last-child > .table_small:last-child > .divTableCell:last-child {
    border-bottom-right-radius: 5px;
  }
  
  .divTableRow:last-child > .table_small:first-child > .divTableCell:last-child {
    border-bottom-left-radius: 5px;
  }
  
  .divTableRow:nth-child(2n+3) {
    background: #e9e9e9;
  }
  
  @media screen and (max-width: 900px) {
    .divTable {
      width: 90%
    }
  }
  
  @media screen and (max-width: 650px) {
    .divTable {
      display: block;
    }
    .divTableRow:nth-child(2n+3) {
      background: none;
    }
    .divTableHeading {
      display: none;
    }
    .divTableRow > .table_small > .divTableCell:nth-child(odd) {
      display: table-cell;
      width: 50%;
    }
    .divTableCell {
      display: table-cell;
      width: 50%;
    }
    .divTableRow {
      display: table;
      width: 100%;
      border-collapse: separate;
      padding-bottom: 20px;
      margin: 5% auto 0;
      text-align: center;
    }
    .table_small {
      display: table-row;
    }
    .divTableRow > .table_small:first-child > .divTableCell:last-child {
      border-left: none;
    }
    .divTableRow > .table_small > .divTableCell:first-child {
      border-left: #ccc 1px solid;
    }
    .divTableRow > .table_small:first-child > .divTableCell:first-child {
      border-top-left-radius: 5px;
      border-top: #ccc 1px solid;
    }
    .divTableRow > .table_small:first-child > .divTableCell:last-child {
      border-top-right-radius: 5px;
      border-top: #ccc 1px solid;
    }
    .divTableRow > .table_small:last-child > .divTableCell:first-child {
      border-right: none;
    }
    .divTableRow > .table_small > .divTableCell:last-child {
      border-right: #ccc 1px solid;
    }
    .divTableRow > .table_small:last-child > .divTableCell:first-child {
      border-bottom-left-radius: 5px;
    }
    .divTableRow > .table_small:last-child > .divTableCell:last-child {
      border-bottom-right-radius: 5px;
    }
  }
 
</style>