 🏨 Hotel Management System (Owner Portal)

A web-based Hotel Management System built using PHP and MySQL, designed specifically for hotel owners and employees to efficiently manage key hotel operations such as guest records, reservations, stay history, plan availability, refunds, and employee data. This system eliminates the need for maintaining large physical books and streamlines administrative processes.

## 💡 Features

- **Guest Management**: Add, update, and view guest details.
- **Reservation System**: Manage room bookings, check-ins, check-outs, and reservation history.
- **Room/Plan Management**: Add, update, delete plans (e.g., rooms, party halls) manually by staff.
- **Availability Tracker**: Automatically update availability based on check-ins and check-outs.
- **Refund Processing**: Issue partial refunds if the guest vacates earlier than scheduled.
- **Employee Management**: Maintain employee records and access control.
- **Feedback Collection**: Store user feedback for future improvements.
- **Stay History Log**: View stays filtered by date, month, or year.

## 🛠️ Tech Stack

- **Frontend**: HTML, CSS  
- **Backend**: PHP  
- **Database**: MySQL  
- **Server**: XAMPP (Apache + MySQL)

## 📁 Modules

| Module         | Functionality Description |
|----------------|---------------------------|
| `hotel.php`    | Add, update, delete employee data |
| `plan.php`     | Add, update, delete plans (e.g., rooms, party halls) |
| `guest.php`    | Add and update guest information |
| `reservation.php` | Add new reservations, mark check-outs, update availability |
| `refund.php`   | Issue refunds based on early check-out |
| `feedback.php` | Collect and store guest feedback |
| `stayhistory.php` | Display stay records by specific date, month, or year |

## 🚀 How to Run the Project

1. Install **XAMPP** and start **Apache** and **MySQL**.
2. Clone or download this repository to the `htdocs` folder.
3. Import the provided `.sql` file into **phpMyAdmin** to set up the database.
4. Access the project in your browser at:  
   `http://localhost/<your-project-folder-name>`

## 📌 Use Case

This project is intended **only for internal staff use**, especially receptionists and hotel managers, to handle day-to-day hotel operations digitally. All critical operations like availability updates, reservations, and plan creation are to be managed manually by the employee for accuracy and control.

## 🙋‍♂️ Author
SUBRAMANIAN K  
Final Year Information Technology Student  
Passionate about developing real-world solutions using technology.

<img width="1847" height="926" alt="image" src="https://github.com/user-attachments/assets/378fa54c-e4c1-4eb1-93d1-36cf5f00e6ad" />
<img width="1860" height="915" alt="Screenshot 2025-07-26 115311" src="https://github.com/user-attachments/assets/bbfaee20-fed3-4218-b6e6-805200b3b8a0" />

