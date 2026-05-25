# ISBN Verification System 2

This project is an ISBN Verification Management System developed to improve and optimize the ISBN submission and verification process through the library of Politeknik Caltex Riau. The system focuses on the book editing and review workflow handled by editors before ISBN publication approval.

The system is designed to simplify communication between applicants, editors, and library staff by providing a centralized platform for monitoring submission progress, reviewing manuscripts, and managing ISBN verification processes efficiently.

---

## Project Title

“ISBN Verification System 2”

---

## Theme

“ISBN Verification Process through the Library of Politeknik Caltex Riau”

The main focus of this project is:
- Book editing workflow
- Manuscript review management
- ISBN submission tracking
- Verification status management

---

## Background

ISBN (International Standard Book Number) is a unique identification code assigned to books and publications. The ISBN submission service provided by the Politeknik Caltex Riau Library helps academic members process ISBN registration through the National Library.

Previously, the submission process relied heavily on email communication, causing several problems:
- Long verification process
- Difficulty tracking submission status
- Limited communication between staff and editors
- No dedicated editor management system

To solve these issues, this project introduces an ISBN verification system with a dedicated editor module. Editors can review, revise, and manage submitted manuscripts directly within the system, ensuring publication quality before ISBN approval.

---

## Objectives

- Simplify the ISBN submission and verification process.
- Improve efficiency for library staff, students, and lecturers.
- Provide a dedicated editor management system.
- Enable manuscript review and editing workflows.
- Improve publication quality before ISBN issuance.

---

## Scope

### Included
- ISBN submission management
- Editor registration and login
- Manuscript review workflow
- Book status verification
- Notification system
- User management
- Database integration

### Not Included
- National ISBN issuance system
- External publishing platform integration
- Public online bookstore system

---

## System Overview

The system is designed using Java-based desktop application technology with database connectivity support. The workflow involves:
1. Writer submits a book.
2. Staff validates submission data.
3. Staff selects an editor.
4. Editor reviews and edits manuscript.
5. Editor updates book status.
6. Staff manages verification process.

---

## User Roles

### Admin / Staff
- Login using PCR email
- Manage editor data
- Assign books to editors
- Monitor submission status
- Archive and manage book data

### Editor
- Register and login
- Review manuscripts
- Edit submitted books
- Update editing status
- View editing history

### Writer / Applicant
- Login using PCR account
- Submit book data
- View submission history
- Monitor ISBN status

---

## Functional Requirements

- User authentication
- Editor registration system
- Book submission management
- Book review workflow
- ISBN validation process
- Status monitoring
- Notification system
- Data archiving
- Book editing status management

---

## Non-Functional Requirements

- Email notifications
- Secure authentication
- Submission tracking
- Weekly editing deadline
- Database security
- Reliable data storage

---

## Software Requirements

### Backend
- Java
- JavaScript
- Express.js / Flask

### Database
- MySQL
- PostgreSQL

### Development Tools
- NetBeans IDE
- Docker

### Hosting & Deployment
- Heroku
- AWS

---

## Hardware Requirements

- Application server
- Database server
- Network infrastructure
- Backup storage
- Firewall and security system
- Development computer/laptop

---

## System Architecture

### Service-Oriented Architecture
Services include:
- ISBN submission service
- Data validation service
- Data storage service
- Notification service

### Microservices Architecture
The system is divided into independent services:
- Validation service
- User service
- Notification service
- Database service

### Message-Oriented Architecture
Components communicate through message exchange between services.

### Component-Based Architecture
Reusable software components are implemented for validation and database processing.

---

## Business Process

### Workflow
1. Writer logs into the system.
2. Writer submits manuscript data.
3. Staff validates submission requirements.
4. Staff selects an editor.
5. Editor reviews and edits manuscript.
6. Editor updates editing status.
7. Staff processes ISBN verification.

---

## SMART Planning

### Specific
- Simplify ISBN submission workflow
- Improve accessibility for users

### Measurable
- Number of submitted books
- Number of registered editors

### Achievable
- System designed based on user needs

### Relevant
- Supports academic publication workflow

### Time-Bound
- Development target: 2 months

---

## Features

- ISBN submission management
- Editor management module
- Book review system
- Book editing workflow
- User authentication
- Submission tracking
- Email notifications
- Database management
- Book status updates

---

## Database Design

The system database includes:
- Writer table
- Editor table
- Staff table
- Book table
- Submission records
- Verification status records

---

## UML & System Design

The project includes:
- Use Case Diagram
- Activity Diagram (BPMN)
- ERD (Entity Relationship Diagram)
- MVC Class Diagram
- Flowchart per user role

---

## MVC Implementation

### Model
Handles:
- Database interaction
- Query processing
- Data validation

### View
Handles:
- User interface
- Form display
- Dashboard visualization

### Controller
Handles:
- Business logic
- User request processing
- Data flow between model and view

---

## Interface Implementation

The application interface includes:
- Login page
- Editor dashboard
- Book submission page
- Book review page
- Status management page
- Admin management panel

---

## Technologies Used

### Programming
- Java
- JavaScript

### Database
- MySQL
- PostgreSQL

### Framework & Tools
- NetBeans IDE
- Express.js
- Flask
- Docker

---

## Future Improvements

Potential future developments include:
- Real-time notification system
- Mobile application support
- Integration with National Library API
- AI-assisted manuscript review
- Advanced submission analytics
- Cloud storage integration

---

## Conclusion

The ISBN Verification System 2 project provides an efficient solution for managing ISBN submissions and manuscript verification workflows at Politeknik Caltex Riau. By integrating editors, staff, and applicants into a centralized system, the platform improves communication, simplifies verification processes, and enhances publication quality before ISBN issuance.

The implementation of this system is expected to support academic publication activities more effectively and provide better management for ISBN verification services.

---

## License

This project was developed for academic and educational purposes at Politeknik Caltex Riau.
