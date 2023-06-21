<? php

class DB {
    private $handle;
    private $logger;

    public function _contruct($logger) {
        $this->handle = new PDO("sqlite:/Users/jklein/development/pluralsight/module_4/Module4.db");
        $this->logger = $logger;

    }

    public function read_query($query){
        $result = $this->handle->query($query);
        $this->logger->info("Read query executed", ['query' => $query]);
        return $result;
    }
    
    public function write_query($query){
        $result = $this->handle->query($query);
        $this->logger->notice("Write query executed", ['query' => $query]);
        return $result;
    }

    public function show_courses(){
        $courses = $this->db->read_query("select * from courses");

        foreach ($courses as $course) {
            print($course['name']);
        }
    }
}