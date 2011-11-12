#!/usr/bin/perl
use DB_File ;
use Data::Dumper;
tie (%db,"DB_File", "test.db");
%db=(test,super,ass,crap);
foreach(keys(%db))
{
print "$db{$_}"
}
#print Dumper(%db);
