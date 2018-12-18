# habit-app-api

## General

All requests should be send using JSON and with the Accep: application/json header.

## Habits

### `GET /habits`
Will return a list of habits

### `POST /habits`
Will create a new habit

####Request
* `name`: required, name of habit
* `category`: required, type of habit
* `description`: not required, text describing habit
* `frequency`: required, number of times habit is done in a time period
* `period`: required, string, the time period the frequency refers to
* `motivation`: not required, reason for starting the habit

### `GET /habit/:id`
Will create a new habit

### `PUT /habit/:id`
Will update a habit

####Request
* `name`: required, name of habit
* `category`: required, type of habit
* `description`: not required, text describing habit
* `frequency`: required, number of times habit is done in a time period
* `period`: required, string, the time period the frequency refers to
* `motivation`: not required, reason for starting the habit

### `DELETE /habit/:id`
Will delete a habit

## Logs

### `GET /habits/:id/logs`
Will get all logs for a habit

### `POST /habits/:id/logs`
Will create a new log for a habit

#### Request
* `date_completed`: date of log (habit was marked as complete for this date, not date log was created, as they may differ). Format: YYYY-MM-DD

### `DELETE /logs/:id`
Will delete a log based on the log id (independent of habit id)
