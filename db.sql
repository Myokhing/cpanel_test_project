## create database;

create database school;

## create table;
create table students(
    id int primary key auto_increment,
    name varchar(225) not null,
    join_date DATE,
    bio Text,
    room_id int,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

## insert data
insert into students(name, join_date, bio, room_id) values('John', '2020-01-01', 'I am a student', 1);
create table courses(
    id int primary key auto_increment,
    course_name varchar(225) not null,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);


insert into courses(course_name) values('Grade 1st');
insert into courses(course_name) values('Grade 2d');
insert into courses(course_name) values('Grade 3rd');
insert into courses(course_name) values('Grade 4th');
insert into courses(course_name) values('Grade 5th');
insert into courses(course_name) values('Grade 6th');
insert into courses(course_name) values('Grade 7th');
insert into courses(course_name) values('Grade 8th');
insert into courses(course_name) values('Grade 9th');
insert into courses(course_name) values('Grade 10th');


create table subjects(
    id int primary key auto_increment,
    subject_name varchar(225) not null,
    course_id int not null,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

insert into subjects(subject_name, course_id) values('Myanmar', 1);
insert into subjects(subject_name, course_id) values('English', 2);
insert into subjects(subject_name, course_id) values('Math', 3);
insert into subjects(subject_name, course_id) values('History',  4);
insert into subjects(subject_name, course_id) values('Geography', 5);
insert into subjects(subject_name, course_id) values('Biology', 6);
insert into subjects(subject_name, course_id) values('Chemistry', 7);
insert into subjects(subject_name, course_id) values('Physics', 8);
insert into subjects(subject_name, course_id) values('Computer', 9);
insert into subjects(subject_name, course_id) values('Music', 10);
insert into subjects(subject_name, course_id) values('Art', 11);
insert into subjects(subject_name, course_id) values('Religion', 12);
insert into subjects(subject_name, course_id) values('Business', 13);
insert into subjects(subject_name, course_id) values('Economics', 14);
insert into subjects(subject_name, course_id) values('Accounting', 15);
insert into subjects(subject_name, course_id) values('Commerce', 16);
insert into subjects(subject_name, course_id) values('Agriculture', 17);
insert into subjects(subject_name, course_id) values('Buddhism', 18);
insert into subjects(subject_name, course_id) values('Christianity', 19);
insert into subjects(subject_name, course_id) values('Hinduism', 20);
insert into subjects(subject_name, course_id) values('Islam', 21);
insert into subjects(subject_name, course_id) values('Judaism', 22);
insert into subjects(subject_name, course_id) values('Sikhism', 23);
insert into subjects(subject_name, course_id) values('Taoism', 24);
insert into subjects(subject_name, course_id) values('Philosophy', 25);
insert into subjects(subject_name, course_id) values('Psychology', 26);
insert into subjects(subject_name, course_id) values('Sociology', 27);
insert into subjects(subject_name, course_id) values('Political Science', 28);
insert into subjects(subject_name, course_id) values('Geography', 29);
insert into subjects(subject_name, course_id) values('Economics', 30);
insert into subjects(subject_name, course_id) values('Accounting', 31);
insert into subjects(subject_name, course_id) values('Commerce', 32);
insert into subjects(subject_name, course_id) values('Agriculture', 33);
insert into subjects(subject_name, course_id) values('Buddhism', 34);
insert into subjects(subject_name, course_id) values('Christianity', 35);
insert into subjects(subject_name, course_id) values('Hinduism', 36);
insert into subjects(subject_name, course_id) values('Islam', 37);
insert into subjects(subject_name, course_id) values('Judaism', 38);
insert into subjects(subject_name, course_id) values('Sikhism', 39);
insert into subjects(subject_name, course_id) values('Taoism', 40);


create table chapters(
    id int primary key auto_increment,
    chapter_name varchar(225) not null,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

insert into chapters(chapter_name) values('Chpater 1');
insert into chapters(chapter_name) values('Chpater 2');
insert into chapters(chapter_name) values('Chpater 3');
insert into chapters(chapter_name) values('Chpater 4');
insert into chapters(chapter_name) values('Chpater 5');
insert into chapters(chapter_name) values('Chpater 6');
insert into chapters(chapter_name) values('Chpater 7');
insert into chapters(chapter_name) values('Chpater 8');
insert into chapters(chapter_name) values('Chpater 9');
insert into chapters(chapter_name) values('Chpater 10');
insert into chapters(chapter_name) values('Chpater 11');

create table online_classes(
    id int primary key auto_increment,
    title varchar(225) not null,
    course_id int not null,
    subject_id int not null,
    chapter_id int not null,
    description Text not null,
    exercise Text not null,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
insert into online_classes(title, course_id, subject_id, chapter_id, description, exercise) values('simple present', 2, 3, 4, 'verb to be am - is - are', 'simple present');
insert into online_classes(title, course_id, subject_id, chapter_id, description, exercise) values('simple past', 2, 3, 4, 'verb to be am - was - were', 'simple past');
insert into online_classes(title, course_id, subject_id, chapter_id, description, exercise) values('simple future', 2, 3, 4, 'verb to be am - will be', 'simple future');
insert into online_classes(title, course_id, subject_id, chapter_id, description, exercise) values('simple present', 2, 3, 4, 'verb to be am - is - are', 'simple present');

## examination questions table
create table examination_questions(
    id int primary key auto_increment,
    course_id int not null,
    subject_id int not null,
    question TEXT not null,
    option_a TEXT not null,
    option_b TEXT not null,
    option_c TEXT not null,
    option_d TEXT not null,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
    insert into examination_questions(course_id, subject_id, question, option_a, option_b, option_c, option_d) values(1, 2, 'what is your name?', 'mg mg', 'hla hla', 'hla hla', 'option a');
    insert into examination_questions(course_id, subject_id, question, option_a, option_b, option_c, option_d) values(1, 2, 'what is your name?', 'mg mg', 'hla hla', 'hla hla', 'option a');


create table option_answers(
    id int primary key auto_increment,
    course_id int null,
    subject_id int null,
    question_id TEXT null,
    option_a TEXT null,
    option_b TEXT null,
    option_c TEXT null,
    option_d TEXT null,
    option_answer enum('true', 'false') null,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

    insert into option_answers(course_id, subject_id, question_id, option_a, option_b, option_c, option_d, option_answer) values(1, 2, 1, 'mg mg', 'hla hla', 'hla hla', 'option a', 'true');
    insert into option_answers(course_id, subject_id, question_id, option_a, option_b, option_c, option_d, option_answer) values(1, 2, 2, 'mg mg', 'hla hla', 'hla hla', 'option a', 'true');
    
    
    create table student_answers(
    id int primary key auto_increment,
    student_option_answer TEXT not null,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

    
## test_quiz table
create table test_quiz (
    id int primary key auto_increment,
    question Text not null,
    is_enabled int not null,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

insert into test_quiz(question, is_enabled) values('what is your name?', 1);
insert into test_quiz(question, is_enabled) values('who are you?', 2);
insert into test_quiz(question, is_enabled) values('where do you live?', 3);
insert into test_quiz(question, is_enabled) values('what is your age?', 4);
insert into test_quiz(question, is_enabled) values('what is your telephone number?', 5);
insert into test_quiz(question, is_enabled) values('what is your email?', 6);
insert into test_quiz(question, is_enabled) values('what is your address?', 7);
insert into test_quiz(question, is_enabled) values('what is your teacher name?', 8);
insert into test_quiz(question, is_enabled) values('what is your teacher telephone number?', 9);
insert into test_quiz(question, is_enabled) values('what is your teacher email?', 10);
insert into test_quiz(question, is_enabled) values('what is your teacher address?', 11);
insert into test_quiz(question, is_enabled) values('what is your teacher qualification?', 12);
insert into test_quiz(question, is_enabled) values('what is your teacher experience?', 13);
insert into test_quiz(question, is_enabled) values('what is your friend name?', 14);
insert into test_quiz(question, is_enabled) values('what is your friend telephone number?', 15);
insert into test_quiz(question, is_enabled) values('what is your friend email?', 16);
insert into test_quiz(question, is_enabled) values('what is your friend address?', 17);
insert into test_quiz(question, is_enabled) values('what is your friend qualification?', 18);
insert into test_quiz(question, is_enabled) values('what is your friend experience?', 19);
insert into test_quiz(question, is_enabled) values('what is your brother name?', 20);
create table test_quiz_options (
    id int primary key auto_increment,
    test_quiz_id int not null,
    option_answer TEXT not null,
    is_enabled int not null,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(1, 'array_rev()', 1);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(2, 'array_revese()', 2);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(3, 'reverse()', 3);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(4, 'array_end()', 4);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(5, 'array_pop()', 5);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(6, 'array_shift()', 6);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(7, 'array_unshift()', 7);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(8, 'array_push()', 8);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(9, 'chr()', 9);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(10, 'ascii()', 10);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(11, 'return_chr()', 11);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(12, 'define()', 12);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(13, 'exist()', 13);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(14, 'const()', 14);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(15, 'include()', 15);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(16, 'require()', 16);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(17, 'include_once()', 17);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(18, 'require_once()', 18);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(19, 'arr_end()', 19);
insert into test_quiz_options(test_quiz_id, option_answer, is_enabled) values(20, 'last()', 20);

 
create table test_quiz_answers (
    id int primary key auto_increment,
    test_quiz_id int not null,
    option_number int not null,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
insert into test_quiz_answers(test_quiz_id, option_number) values(1, 1);
insert into test_quiz_answers(test_quiz_id, option_number) values(2, 2);
insert into test_quiz_answers(test_quiz_id, option_number) values(3, 3);
insert into test_quiz_answers(test_quiz_id, option_number) values(4, 4);
insert into test_quiz_answers(test_quiz_id, option_number) values(5, 1);
insert into test_quiz_answers(test_quiz_id, option_number) values(6, 2);
insert into test_quiz_answers(test_quiz_id, option_number) values(7, 3);
insert into test_quiz_answers(test_quiz_id, option_number) values(8, 4);
insert into test_quiz_answers(test_quiz_id, option_number) values(9, 1);
insert into test_quiz_answers(test_quiz_id, option_number) values(10, 2);
insert into test_quiz_answers(test_quiz_id, option_number) values(11, 3);
insert into test_quiz_answers(test_quiz_id, option_number) values(12, 4);
insert into test_quiz_answers(test_quiz_id, option_number) values(13, 1);
insert into test_quiz_answers(test_quiz_id, option_number) values(14, 2);
insert into test_quiz_answers(test_quiz_id, option_number) values(15, 3);
insert into test_quiz_answers(test_quiz_id, option_number) values(16, 4);

create table questions (
    qid int primary key auto_increment,
    question TEXT not null,
    is_enabled int not null,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
INSERT INTO `questions` (`qid`, `question`, `is_enabled`) VALUES
(1, 'Which function is used to reverse the order of elements in an array?', 1),
(2, 'Which function is used to return character from the ASCII value?', 1),
(3, 'Which function is used to check the existence of a constant?', 1),
(4, 'Which function is used to return the last element of an array?', 1);


create table quiz_options (
    option_id int primary key auto_increment,
    qid int not null,
    option_result TEXT not null,
    is_enabled int not null,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

INSERT INTO `quiz_options` (`option_id`, `qid`, `option_result`, `is_enabled`) VALUES
(1, 1, 'array_rev()', 1),
(2, 1, 'array_reverse()', 1),
(3, 1, 'reverse()', 1),
(4, 1, 'array_end()', 1),
(5, 2, 'chr()', 1),
(6, 2, 'ascii()', 1),
(7, 2, 'asc()', 1),
(8, 2, 'return_chr()', 1),
(9, 3, 'define()', 1),
(10, 3, 'const()', 1),
(11, 3, 'defined()', 1),
(12, 3, 'exist()', 1),
(13, 4, 'end()', 1),
(14, 4, 'arr_end()', 1),
(15, 4, 'last()', 1),
(16, 4, 'end()', 1);

create table quiz_answer(
    qa_id int primary key auto_increment,
    qid int not null,
    option_number int not null,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
INSERT INTO `quiz_answer` (`qa_id`, `qid`, `option_number`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 3, 3),
(4, 4, 4);

## demo checkbox
create table demo_checkboxes (
    id int primary key auto_increment,
    name varchar(255) not null,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
INSERT INTO `demo_checkboxes` (`id`, `name`) VALUES
(1, 'Option 1'),
(2, 'Option 2'),
(3, 'Option 3'),
(4, 'Option 4');


## demo questions
create table demo_questions (
    id int primary key auto_increment,
    course_id int not null,
    subject_id int not null,
    chapter_id int not null,
    question TEXT not null,
    is_enabled int DEFAULT (0),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
INSERT INTO `demo_questions` (`id`, `course_id`, `subject_id`, `chapter_id`, `question`, `is_enabled`) VALUES
(1, 1, 1, 1, 'Which function is used to reverse the order of elements in an array?', 1),
(2, 1, 1, 1, 'Which function is used to return character from the ASCII value?', 1),
(3, 1, 1, 1, 'Which function is used to check the existence of a constant?', 1),
(4, 1, 1, 1, 'Which function is used to return the last element of an array?', 1),
(5, 1, 1, 1, 'Which function is used to reverse the order of elements in an array?', 2),
(6, 1, 1, 1, 'Which function is used to return character from the ASCII value?', 2),
(7, 1, 1, 1, 'Which function is used to check the existence of a constant?', 2),
(8, 1, 1, 1, 'Which function is used to return the last element of an array?', 2),
(9, 1, 1, 1, 'Which function is used to reverse the order of elements in an array?', 3),
(10, 1, 1, 1, 'Which function is used to return character from the ASCII value?', 3),
(11, 1, 1, 1, 'Which function is used to check the existence of a constant?', 3),
(12, 1, 1, 1, 'Which function is used to return the last element of an array?', 3),
(13, 1, 1, 1, 'Which function is used to reverse the order of elements in an array?', 4),
(14, 1, 1, 1, 'Which function is used to return character from the ASCII value?', 4),
(15, 1, 1, 1, 'Which function is used to check the existence of a constant?', 4),
(16, 1, 1, 1, 'Which function is used to return the last element of an array?', 4),
(17, 1, 1, 1, 'Which function is used to reverse the order of elements in an array?', 5),
(18, 1, 1, 1, 'Which function is used to return character from the ASCII value?', 5),
(19, 1, 1, 1, 'Which function is used to check the existence of a constant?', 5),
(20, 1, 1, 1, 'Which function is used to return the last element of an array?', 5);

## demo answer options

create table demo_answer_options (
    id int primary key auto_increment,
    question_id int not null,
    option_a TEXT not null,
    option_b TEXT not null,
    option_c TEXT not null,
    correct_option_result TEXT not null,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
insert into demo_answer_options(question_id, option_a, option_b, option_c, correct_option_result) values(1, 'array_rev()', 'array_reverse()', 'reverse()', 'array_rev()');
insert into demo_answer_options(question_id, option_a, option_b, option_c, correct_option_result) values(2, 'chr()', 'ascii()', 'asc()', 'chr()');
insert into demo_answer_options(question_id, option_a, option_b, option_c, correct_option_result) values(3, 'define()', 'const()', 'defined()', 'define()');
insert into demo_answer_options(question_id, option_a, option_b, option_c, correct_option_result) values(4, 'end()', 'arr_end()', 'last()', 'end()');
insert into demo_answer_options(question_id, option_a, option_b, option_c, correct_option_result) values(5, 'array_rev()', 'array_reverse()', 'reverse()', 'array_rev()');
insert into demo_answer_options(question_id, option_a, option_b, option_c, correct_option_result) values(6, 'chr()', 'ascii()', 'asc()', 'chr()');
insert into demo_answer_options(question_id, option_a, option_b, option_c, correct_option_result) values(7, 'define()', 'const()', 'defined()', 'define()');
insert into demo_answer_options(question_id, option_a, option_b, option_c, correct_option_result) values(8, 'end()', 'arr_end()', 'last()', 'end()');
insert into demo_answer_options(question_id, option_a, option_b, option_c, correct_option_result) values(9, 'array_rev()', 'array_reverse()', 'reverse()', 'array_rev()');
insert into demo_answer_options(question_id, option_a, option_b, option_c, correct_option_result) values(10, 'chr()', 'ascii()', 'asc()', 'chr()');
