USE tskmgr;

DROP TABLE IF EXISTS `tasks`;

CREATE TABLE tasks (
                        taskNum        INT(12)        NOT NULL,   AUTO_INCREMENT,
                        userID     VARCHAR(30)           NOT NULL,
                        task        VARCHAR(300)        NOT NULL,
                        taskDate      DATETIME       NOT NULL,
                        PRIMARY KEY (taskNum)


INSERT INTO tasks VALUES
(0, 'TestUser', 'This is a test task to ensure your TaskManager is working.', DATETIME_INTERVAL_CODE),
