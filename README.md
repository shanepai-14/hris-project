# HRIS (Human Resources Information System)

![HRIS Logo](assets\imgs\hris-login.png)
![HRIS System](assets\imgs\hris-dashboard.png)

## Overview

This project aims to create a functional HRIS system to streamline HR processes, manage employee information, and facilitate communication within an organization.

## Technology Stack

- **Backend:** PHP
- **Frontend:** HTML, CSS, JavaScript, jQuery
- **UI Framework:** Bootstrap
- **Database:** MySQL

## Current Features

1. **User Authentication:**
   - Separate login for admin and employee roles
2. **Employee Management:**
   - Store and manage employee information:
     - Contact details
     - Employment history
     - Basic employee details
3. **Announcement Board:**
   - Admins can create and post announcements
   - Employees can view announcements
4. **Employee Self-Service:**
   - Employees can update their personal information
5. **Administrative Actions:**
   - Admins can update employee statuses

## Known Missing Features

- **Attendance Tracking:** Record employee attendance and manage leaves
- **Payroll Management:** Process payroll calculations and generate payroll reports
- **Performance Management:** Conduct performance reviews and track employee progress
- **Benefits Administration:** Manage employee benefits enrollment and claims
- **Recruiting and Onboarding:** Manage job postings, applications, and onboarding processes
- **Reporting and Analytics:** Generate various HR-related reports

## Status

**Under Development:** The project is actively being developed, and additional features are planned for future releases.

## Getting Started

1. Clone or download the project repository.
2. Set up a local PHP development environment with a MySQL database.
3. Import the `hris.sql` database file into your MySQL server.
4. Configure database connection details in the `config/db.php` file.
5. Access the application in your web browser (typically http://localhost/hris).

## Contributing

Contributions are welcome! Please follow the project's coding conventions and create pull requests for any changes or additions.
