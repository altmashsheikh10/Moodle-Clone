Database : sessionpractical

Table : signin
+----------------------+-------------- +------+-----+---------------------+-------------------------------------+
| Field                           | Type              | Null   | Key   | Default                    | Extra                                                |
+----------------------+---------------+------+-----+---------------------+-------------------------------------+
| id                               | int(10)             | NO   | PRI   | NULL                        | auto_increment                              |
| name                         | varchar(20)     | NO   |          | NULL                       |                                                         |
| password                   | varchar(15)     | NO  |          | NULL                       |                                                         |
| designation               | varchar(15)     | NO   |         | NULL                       |                                                         |
| course_1                    | varchar(5)       | NO   |         | NULL                       |                                                         |
| marks_course1          | int(5)               | NO   |         | NULL                       |                                                         |
| attendence_course1 | int(5)               | NO   |         | NULL                       |                                                         |
| course_2                    | varchar(5)       | NO   |         | NULL                       |                                                         |
| marks_course2          | int(5)              | NO   |         | NULL                        |                                                         |
| attendence_course2 | int(5)              | NO   |         | NULL                        |                                                         |
| course_3                    | varchar(5)      | NO   |         | NULL                        |                                                         |
| marks_course3          | int(5)              | NO   |         | NULL                        |                                                         |
| attendence_course3 | int(5)              | NO   |         | NULL                        |                                                         |
| naam                         | varchar(20)    | NO   |         | NULL                        |                                                         |
| notification1             | varchar(200)   | YES  |         | NULL                        |                                                         |
| announcements1     | varchar(200)   | YES  |         | NULL                        |                                                         |
| time                          | timestamp     | NO   |         | current_timestamp() | on update current_timestamp()   |
| filename                   | varchar(30)     | NO   |        | NULL                        |                                                         |
| username1               | varchar(20)     | NO   |        | NULL                        |                                                         |
| files                           | blob               | NO   |        | NULL                        |                                                         |
+---------------------+---------------+-----+----+----------------------+-------------------------------------+

Table : files
+----------+-----------+------+-----+-----------------------+-----------------------------------+
| Field         | Type         | Null   | Key  | Default                        | Extra                                             |
+----------+-----------+------+-----+-----------------------+-----------------------------------+
| filename | blob          | NO     |         | NULL                           |                                                      |
| time        | timestamp| NO     |         | current_timestamp()   | on update current_timestamp() |
| name      | text           | NO      |         | NULL                           |                                                     |
+----------+-----------+------+-----+-----------------------+-----------------------------------+

The homepage of the website is "login.php".