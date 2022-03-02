# SportsClub-Management-System
We've build a web-based application that aims to act as an **integrated platform 
for cross-city Sports Clubs.** Thus, the application will act as a 3rd Party management 
system that aims to link the Client Sports Clubs to their potential customers. Our 
application is designed to allow for 3 mutually exclusive types of users (Players, Sports 
Clubs, and Admin), each of which has separate tailor-made access privileges to the 
databases and their attributed functionalities.

**Players Login:** The application aims to solve persistent problems faced by sports 
enthusiasts across the country - the occasional unavailability of a suitable playing space 
nearby as well as the unavailability of a suitably skilled opponent. Thus our application 
aims to unite such registered players, guide them to the nearest, most suitable Sports Club, 
book courts based on the available time slots (stored in a Slots database), apply for training 
programmes under qualified coaches, and participate in sports events nearby, etc. We have 
assumed a players database (including Name, RegID (primary key), Location, Sports 
Interests, skill Level, Sports Achievements, Training Programmes enrolled, etc.). The 
players can sort the Clubs based on their Sports preferences (each sport is listed in the
Sports database, along with the associated club and location). In addition to this, we have 
a database for coaches (Name, CoachID, Associated Sport, Associated Club (foreign 
key), time slots, fees charged, etc.). 

**Sports Club’s Login:** We also identified another problem - small clubs often do not have 
a computerized database management system. Keeping this in mind, we provide the 
Database Management System service for the Client Clubs (with a GUI supporting 
functionalities to update information about amenities, equipment, coach availability, etc.). 
The Clubs are listed under the Clubs Database (Location, Sports facilities, slot fees, 
equipment provided, coaches associated (foreign key), user rating, etc.). 
The admin is given access and modification privileges to each of the aforementioned 
databases to maintain the platform's smooth operations.

# Constraints (Data level, application level, GUI level etc.): 
1. A user can book only one court during a given time frame. A user can book no more
than two slots on any given day.
2. Coaches will have fixed time slots for training.
3. Clubs can only fill application forms for registration. The email id and passwords
for clubs login will be provided by the developers.
4. When booking a facility which involves more than one player, all respective IDs
must be provided for approval of the reservation.
5. Password information will not be displayed while logging in.
6. While clubs can view or cancel the bookings of its members, they cannot change
the time of booking.
7. Each sports facility will have an upper limit for accommodation; hence, respective
constraints will be enabled while users are booking their time slots.
8. Users can only book a sports facility within a time frame of one week prior to the
slot.

# Functionality Supported:
The user will be given a wide variety of options such as coaching, casual play, list of 
upcoming events etc to choose from. Additionally, users will be provided with an option 
to enter solo.
1. Form to add details about sports club
2. Ability to store/update user ratings for sports club
3. Ability to choose/modify time slots for booking by user
4. Ability to add/delete/update description for users/sports clubs/coaches
5. Ability to check previous bookings and ratings
6. Ability to add/update/delete time slots by clubs
7. Ability to add/update/delete sports facilities
8. Ability to print/view the list of upcoming events
9. Ability to view booking calendar
10. Ability to participate in events/competitions
11. Ability to select a city to choose the sports clubs available in the given city
12. Ability to add/update/delete bookings of users by club


#ER Diagram and Relational Schema
https://drive.google.com/file/d/1Xyo9bN2c6UTPArucaudkPtKXMGZQzMT9/view?usp=sharing, https://drive.google.com/file/d/1efp6UCLfZ78moAelHJ8odiUAt2BBJlaO/view?usp=sharing
