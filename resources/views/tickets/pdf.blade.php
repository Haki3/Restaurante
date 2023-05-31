<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ticket</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Nunito');

        body {
            font-family: 'Nunito', sans-serif;
            background-color: ##FF0800;
            color: #333;
        }

        .container {
            width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-size: cover;
            background-repeat: no-repeat;
        }

        h1 {
            text-align: center;
            margin: 0;
            font-size: 48px;
            margin-bottom: 20px;
            color: #F0F0F0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .ticket-info {
            margin-bottom: 10px;
            font-size: 20px;
            color: #333;
        }

        .ticket-info strong {
            font-weight: bold;
        }

        .ticket-items {
            margin-top: 20px;
        }

        .ticket-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 18px;
            color: #333;
        }

        .ticket-item-name {
            flex: 1;
        }

        .ticket-item-quantity {
            width: 70px;
            text-align: right;
        }

        .ticket-total {
            font-size: 24px;
            font-weight: bold;
            text-align: right;
            margin-top: 30px;
            color: #333;
        }

        .restaurant-info {
            margin-top: 40px;
            text-align: center;
            font-size: 16px;
            color: #333;
        }

        .restaurant-info p {
            margin: 0;
        }

        table {
          width: 100%;
          border-collapse: collapse; 
          border-radius: 10px; 
          overflow:hidden; 
          box-shadow: inset -1px -1px rgba(0,0,0,.05);
          background-color:#E9F2F0; 
          color:#333; 
          font-size:18px; 
          margin-bottom:20px; 
        }
        
        th {
          padding-top:.5em; 
          padding-bottom:.5em; 
          text-align:left; 
          font-weight:bold; 
          color:#fff; 
          background-color:#9CC3D5; 
          border-right:solid thin #fff; 
          border-left:solid thin #fff; 
          border-top:solid thin #fff; 
          border-bottom:solid thin #fff; 
        }
        
        td {
          padding:.5em; 
          border-right:solid thin #fff; 
          border-left:solid thin #fff; 
          border-top:solid thin #fff; 
          border-bottom:solid thin #fff; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ticket</h1>
        <div class="ticket-info">
            <p><strong>ID:</strong> {{ $ticket->id }}</p>
            <p><strong>Fecha de creación:</strong> {{ $ticket->created_at }}</p>
        </div>
        <div class="ticket-items">
           <table>
              <thead>
                 <tr>
                    <th>Concepto</th>
                    <th>Cantidad</th>
                 </tr>
              </thead>
              <tbody>
                 <tr>
                    <td>Bebidas</td>
                    <td>{{ $ticket->bebidas }}</td>
                 </tr>
                 <tr>
                    <td>Platos</td>
                    <td>{{ $ticket->platos }}</td>
                 </tr>
              </tbody>
           </table>            
        </div>
        <div class="ticket-total">
            <p><strong>Total:</strong> {{ $ticket->total }}</p>
        </div>
        <div class="restaurant-info">
            <p>Restaurante ABC</p>
            <p>Dirección: Calle Principal, Ciudad</p>
            <p>Teléfono: 123-456-7890</p>
        </div>
    </div>
</body>
</html>

