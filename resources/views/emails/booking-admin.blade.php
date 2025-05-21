<!-- See the settings for some head CSS styles -->
<table class="email" 
       width="100%"
       border= 0;
       cellspacing=0;
       cellpadding="20" 
       style="border-bottom-width: 10px;
              border-bottom-style: solid;
              border-bottom-color: #ff665e">
  
  <tr>
    <td class="header" 
       style="background-color: #ff665e;">
      
      <table border="0" 
             style="color: #fff; 
                    width: 600px; 
                    margin: 0 auto; 
                    font-family: Arial, Helvetica, sans-serif;" 
            cellspacing="0"  width="600">
          <tr>
            <td colspan="2">
              <p></p>
              <h1>Schedule Details</h1>
            </td>
          </tr>
        </table>
      
    </td>
  </tr>
 <tr>
    <td class="content" 
       style="background-color: #eee;">
      
    <table border="0" 
           style="color: #444; 
                  width: 600px; 
                  margin: 0 auto; 
                  border-bottom-width: 1px;
                  border-bottom-style: solid;
                  border-bottom-color: #ddd;
                  font-family: Arial, Helvetica, sans-serif;
									line-height: 1.4;" 
           cellpadding="15" cellspacing="1"  width="600">
       
       <tr  style="background-color:#fff">
         <td width="30%"><strong>Name:</strong></td>
         <td>{{ $name ?? '' }}</td>
       </tr>
       <tr  style="background-color:#fff">
         <td width="30%"><strong>Email:</strong></td>
         <td>{{ $email ?? '' }}</td>
       </tr>
       <tr  style="background-color:#fff">
         <td width="30%"><strong>Telephone:</strong></td>
         <td>{{ $phone_number ?? '' }}</td>
       </tr>

       <tr  style="background-color:#fff">
         <td width="30%"><strong>Schedule Date:</strong></td>
         <td>{{ $schedule_date ?? '' }}</td>
       </tr>       
       <tr  style="background-color:#fff">
         <td width="30%"><strong>Schedule Time:</strong></td>
         <td>{{ $schedule_time ?? '' }}</td>
       </tr>
       <tr  style="background-color:#fff">
         <td width="30%"><strong>Message:</strong></td>
         <td>{{ $user_message ?? '' }}</td>
       </tr>       
    </table>
    </td>
  
</table>