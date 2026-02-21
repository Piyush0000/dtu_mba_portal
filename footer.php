<style>
    /* Footer Styles */
    .footer {
        background: #2c3e50;
        color: white;
        padding: 20px 40px;
        margin-top: 50px;
        border-top: 5px solid #e67e22;
    }

    .footer-content {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
    }

    .footer-section h4 {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 12px;
        color: #e67e22;
    }

    .footer-section ul {
        list-style: none;
    }

    .footer-section li {
        margin-bottom: 5px;
    }

    .footer-section a {
        color: white;
        text-decoration: none;
        font-size: 15px;
    }

    .footer-section a:hover {
        color: #e67e22;
    }

    .footer-section p {
        font-size: 15px;
        line-height: 1.6;
    }

    .footer-bottom {
        background: #e67e22;
        padding: 10px;
    }

    @media (max-width: 992px) {
        .footer-content {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- Footer -->
<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="index.php">• Home</a></li>
                <li><a href="about.php">• About Us</a></li>
                <li><a href="student_life.php">• Student Corner</a></li>
                <li><a href="admission_dtu.php">• Admission</a></li>
                <li><a href="placements.php">• Placements</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h4>Explore</h4>
            <ul>
                <li><a href="https://hostels.dtu.ac.in/" target="_blank">• Hostel</a></li>
                <li><a href="gallery.php">• Gallery</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <p><strong>Tel:</strong> 011-27871018</p>
            <p><strong>Fax:</strong> 011-27871023</p>
        </div>
        <div class="footer-section">
            <p>© 2014 - 2025, Delhi Technological University, Shahbad Daulatpur, Main Bawana Road, DL - 42, IN</p>
        </div>
    </div>
</footer>
<div class="footer-bottom"></div>
