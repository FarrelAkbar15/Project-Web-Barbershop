<html>
<head>
        <title>Project Sentra</title>
        <link rel="stylesheet" href="book.css">
    </head>

    <body>
      <div class="banner">
        <div class="navbar">
          <div class="logo">Vestro Barbershop</div>
          <ul>
            <li><a href="HomeBarber.html">Home</a></li>
            <li><a href="HairArtist.html">Hair Artist</a></li>
            <li><a href="ContacT.php">Contact</a></li>
            <li><a href="Book.php">Book</a></li>
          </ul>
        </div>


        <div class="container">
                <h1>Book Page</h1>
                <p>Booking Hair Artist yang anda inginkan, dan sesuaikan dengan jadwal anda.</p>
                <div class="contact-box">
                    <div class="contact-left">
                        <h3>Book</h3>
                        <form action="bookreceipt.php" method="post" target="_blank">
        
                                <div class="input-row">
                                    <div class="input-group">
                                        <label>Name</label>
                                        <input type="text" placeholder="Farrel Aria" name="nama">
                                    </div>
                                    <div class="input-group">
                                        <label>Phone</label>
                                        <input type="text" placeholder="+62 812 9255" name="telp">
                                    </div>
                                    
                                </div>
                                <div class="input-row">
                                    <div class="input-group">
                                        <label>Hair Artist</label>
                                        <select name="HairArtist">
                                   
                                        <option value="Yanto">Yanto</option>
                                        <option value="Agus">Agus</option>
                                        <option value="Jamal">Jamal</option>
                                        <option value="Samsul">Samsul</option>
                                        <option value="Bambang">Bambang</option>
                                        <option value="Susanto">Susanto</option>
                                        </select>

                                       
                                    </div>
                                    <div class="input-group">
                                        <label>Tanggal</label>
                                        <input type="date" name="tanggal">
                                    </div>
                              
                                </div>
                                
                                <label>Jam</label>
                                <select name="jam">
                           
                                <option value="11.00">11.00</option>
                                <option value="13.00">13.00</option>
                                <option value="15.00">15.00</option>
                                <option value="17.00">17.00</option>
                                <option value="19.00">19.00</option>
                                <option value="21.00">21.00</option>
                                
                                </select>
                               

                                <button type="submit">BOOK</button>
                        </form>
                    </div>
                    <div class="contact-right">
                        <h3>Reach Us</h3>
                        <table>
                            <tr>
                                <td>Instagram</td>
                                <td>@vestrobarber_</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>+62 892 65311 431</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>vestrocorp@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Open Hours</td>
                                <td>10.00 AM - 10.00 PM </td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>Jakarta Barat</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
          </div>


      </div>
</html>