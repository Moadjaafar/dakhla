<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Request - Dakhla Beyond Adventure</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body style="margin: 0; padding: 0; background-color: #f4f4f4; font-family: 'Montserrat', Arial, sans-serif;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 0;">
                <table role="presentation" style="width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; overflow: hidden; margin-top: 20px; margin-bottom: 20px; box-shadow: 0 0 20px rgba(0,0,0,0.1);">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #033A4E 0%, #173C70 100%); padding: 40px; text-align: center;">
                            <h1 style="color: #ffffff; margin: 0; font-size: 28px; font-weight: 600;">New Contact Request</h1>
                            <p style="color: #D79A4C; margin: 10px 0 0 0; font-size: 18px; font-weight: 500;">Dakhla Beyond Adventure</p>
                        </td>
                    </tr>

                    <!-- Decorative Bar -->
                    <tr>
                        <td>
                            <div style="height: 4px; background: linear-gradient(to right, #D79A4C 0%, #336699 100%);"></div>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <table role="presentation" style="width: 100%;">
                                <tr>
                                    <td>
                                        <h2 style="color: #033A4E; font-size: 20px; margin: 0 0 25px 0; font-weight: 600;">Contact Details</h2>
                                        
                                        <table role="presentation" style="width: 100%; border-collapse: collapse;">
                                            <tr>
                                                <td style="padding: 15px 0; border-bottom: 1px solid #eaeaea;">
                                                    <strong style="color: #173C70; font-weight: 600;">Full Name:</strong>
                                                    <span style="margin-left: 10px; color: #333333;">{{ $data['first_name'] }} {{ $data['last_name'] }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 15px 0; border-bottom: 1px solid #eaeaea;">
                                                    <strong style="color: #173C70; font-weight: 600;">Email:</strong>
                                                    <span style="margin-left: 10px; color: #333333;">{{ $data['email'] }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 15px 0; border-bottom: 1px solid #eaeaea;">
                                                    <strong style="color: #173C70; font-weight: 600;">Phone:</strong>
                                                    <span style="margin-left: 10px; color: #333333;">{{ $data['phone'] }}</span>
                                                </td>
                                            </tr>
                                        </table>

                                        <div style="margin-top: 35px;">
                                            <h2 style="color: #033A4E; font-size: 20px; margin: 0 0 20px 0; font-weight: 600;">Message</h2>
                                            <div style="background-color: #f8f9fa; padding: 25px; border-radius: 8px; line-height: 1.6; border-left: 4px solid #D79A4C;">
                                                <p style="margin: 0; color: #333333;">{{ $data['message'] }}</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Call to Action -->
                    <tr>
                        <td style="padding: 0 40px 40px 40px;">
                            <div style="background: linear-gradient(135deg, #336699 0%, #173C70 100%); padding: 25px; border-radius: 8px; text-align: center;">
                                <p style="margin: 0; color: #ffffff; font-size: 16px; font-weight: 500;">
                                    Priority Inquiry - Please Respond Within 24 Hours
                                </p>
                            </div>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #033A4E; padding: 30px 40px; text-align: center;">
                            <p style="margin: 0; color: #9F9F9F; font-size: 14px;">
                                Automated message from Dakhla Beyond Adventure
                            </p>
                            <p style="margin: 10px 0 0 0; color: #D79A4C; font-size: 14px;">
                                Experience the Magic of Dakhla
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>