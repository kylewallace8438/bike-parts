# Project Rules

## Database & Migrations
- **No foreign key constraints in migrations.** Do not use `->constrained()`, `->foreign()`, `->references()`, or `->nullOnDelete()` in migration files. Use plain column types (e.g. `unsignedBigInteger`) for relationship columns.
- **Relationships are handled entirely in code** via Eloquent model relationships (`belongsTo`, `hasMany`, etc.).
