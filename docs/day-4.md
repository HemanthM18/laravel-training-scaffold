# Day 04

## Tasks Completed

- Implemented database schema using Laravel migrations.
- Added required columns to projects, tasks, comments, and project_user tables.
- Defined foreign key relationships between tables.
- Fixed migration order issues to satisfy foreign key constraints.
- Created factories for Project, Task, and Comment models.
- Implemented seeders for users, projects, tasks, and comments.
- Successfully seeded database with:
  - 5 users
  - 10 projects
  - 30 tasks
  - 50 comments

## Problems and How I Solved It

- Faced migration error due to foreign key dependency issue (comments table referencing tasks before it existed).
  → Fixed by adjusting migration file order.

- Faced factory not found error.
  → Created factories using artisan command.

- Faced class not found errors in seeders.
  → Fixed by adding proper `use App\Models\...` imports.

## Final Result

- Database schema successfully created.
- Relationships between tables are working correctly.
- Database seeded with realistic test data.
- Ready for CRUD operations in next phase.